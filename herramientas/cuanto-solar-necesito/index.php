<?php
/**
 * ¿Cuántos paneles solares necesito? kWp, paneles de 550 W, superficie de techo
 * y retorno de la inversión a partir del consumo de la factura de la ANDE. The
 * arithmetic lives in assets/js/tools/cuanto-solar-necesito.js and reads its
 * figures from market_table('energia'), embedded below as JSON.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug    = 'cuanto-solar-necesito';
$tool    = content('tools')[$slug];
$energia = market_table('energia');

ob_start();
?>
<div class="tool card" data-tool="<?= e($slug) ?>">
  <script type="application/json" id="energia-data"><?= json_encode(['solar' => $energia['solar']], JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?></script>
  <form class="tool-form" id="solar-form" novalidate>
    <div class="tool-form__row">
      <label class="field">
        <span>Consumo mensual (kWh)</span>
        <input type="number" inputmode="numeric" min="1" step="1" name="kwh" id="solar-kwh" required placeholder="Ej.: 650">
      </label>
      <label class="field">
        <span>Monto de la factura (₲, opcional)</span>
        <input type="number" inputmode="numeric" min="0" step="1000" name="monto" id="solar-monto" placeholder="Ej.: 450000">
      </label>
    </div>

    <fieldset class="field">
      <legend>¿Qué parte de su consumo quiere cubrir?</legend>
      <div class="chip-row">
        <input class="chip-radio" type="radio" name="cobertura" id="solar-c50" value="0.5">
        <label class="chip" for="solar-c50">La mitad</label>
        <input class="chip-radio" type="radio" name="cobertura" id="solar-c80" value="0.8" checked>
        <label class="chip" for="solar-c80">80 %</label>
        <input class="chip-radio" type="radio" name="cobertura" id="solar-c100" value="1">
        <label class="chip" for="solar-c100">Todo</label>
      </div>
    </fieldset>

    <fieldset class="field">
      <legend>¿Quiere que la casa siga funcionando durante un corte?</legend>
      <div class="chip-row">
        <input class="chip-radio" type="radio" name="respaldo" id="solar-r0" value="0" checked>
        <label class="chip" for="solar-r0">No, solo ahorrar</label>
        <input class="chip-radio" type="radio" name="respaldo" id="solar-r4" value="4">
        <label class="chip" for="solar-r4">Sí, unas 4 horas</label>
        <input class="chip-radio" type="radio" name="respaldo" id="solar-r8" value="8">
        <label class="chip" for="solar-r8">Sí, unas 8 horas</label>
      </div>
    </fieldset>

    <label class="field">
      <span>Consumo esencial durante el corte (W): heladera, luces, internet, ventiladores</span>
      <input type="number" inputmode="numeric" min="100" step="50" value="600" name="esencial" id="solar-esencial">
    </label>

    <label class="field">
      <span>¿Ya tiene un presupuesto? Precio total (₲, opcional)</span>
      <input type="number" inputmode="numeric" min="0" step="100000" name="presupuesto" id="solar-presupuesto" placeholder="Para calcular en cuántos años se paga">
    </label>

    <div class="btn-row">
      <button class="btn btn--primary" type="submit"><?= e(ui('tools.calculate')) ?></button>
    </div>
  </form>

  <div class="tool-result" id="solar-result" hidden aria-live="polite">
    <h2 class="card-title"><?= e(ui('tools.result_title')) ?></h2>
    <dl class="tool-result__lines">
      <dt>Potencia del sistema</dt>
      <dd id="solar-kwp"></dd>
      <dt>Paneles de <?= e((string) $energia['solar']['panelW']) ?> W</dt>
      <dd id="solar-paneles"></dd>
      <dt>Superficie de techo</dt>
      <dd id="solar-m2"></dd>
      <dt>Generación estimada</dt>
      <dd id="solar-gen"></dd>
      <dt>Tipo de sistema</dt>
      <dd id="solar-tipo"></dd>
      <dt>Baterías</dt>
      <dd id="solar-baterias"></dd>
      <dt>Ahorro mensual estimado</dt>
      <dd id="solar-ahorro"></dd>
      <dt>Retorno de la inversión</dt>
      <dd id="solar-retorno"></dd>
    </dl>
    <p class="note">Calculado con <?= e(number_format($energia['solar']['hsp'], 1, ',', '.')) ?> horas solares pico
      promedio en Asunción y un rendimiento del sistema del <?= e((string) round($energia['solar']['performanceRatio'] * 100)) ?> %.
      <?= e(ui('tools.orientativo')) ?></p>
    <div class="btn-row mt-3">
      <button class="btn btn--primary" type="button" id="solar-use-result">Pedir presupuesto con este resultado</button>
      <a class="btn btn--secondary" data-share hidden target="_blank" rel="noopener">Compartir por WhatsApp</a>
    </div>
  </div>

  <noscript><p class="note"><?= e(ui('tools.need_js')) ?></p></noscript>
</div>

<?php
$formId         = $slug;
$formService    = $slug;
$formNeed       = $tool['formNeed'];
$formHeading    = ui('form.legend');
$formSourcePage = $tool['path'];
require ROOT_DIR . '/partials/lead-form.php';
?>
<?php
$toolCalcHtml = ob_get_clean();

require ROOT_DIR . '/templates/tool.php';

<?php
/**
 * Calculadora de consumo eléctrico: kWh por mes de cada equipo, el costo con el
 * precio por kWh de la propia factura, y los tres equipos que más pesan. The
 * arithmetic lives in assets/js/tools/consumo-electrico.js; appliance figures
 * come from market_table('energia'), embedded below as JSON.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug    = 'consumo-electrico';
$tool    = content('tools')[$slug];
$energia = market_table('energia');

ob_start();
?>
<div class="tool card" data-tool="<?= e($slug) ?>">
  <script type="application/json" id="energia-data"><?= json_encode(['equipos' => $energia['equipos']], JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?></script>
  <form class="tool-form" id="consumo-form" novalidate>
    <p class="note">Indique cuántos equipos tiene y cuántas horas por día los usa. Los watts son valores típicos: si conoce los de su equipo, corríjalos.</p>
    <div class="equipos">
      <?php foreach ($energia['equipos'] as $conEquipo): ?>
        <div class="equipo-row equipo-row--3" data-id="<?= e($conEquipo['id']) ?>" data-uso="<?= e((string) $conEquipo['uso']) ?>">
          <span class="equipo-row__label"><?= e($conEquipo['label']) ?></span>
          <label class="field equipo-row__field">
            <span>Cantidad</span>
            <input type="number" inputmode="numeric" min="0" max="100" step="1" value="0" data-role="qty">
          </label>
          <label class="field equipo-row__field">
            <span>Horas/día</span>
            <input type="number" inputmode="decimal" min="0" max="24" step="0.1" value="<?= e((string) $conEquipo['horas']) ?>" data-role="horas">
          </label>
          <label class="field equipo-row__field">
            <span>Watts</span>
            <input type="number" inputmode="numeric" min="0" step="1" value="<?= e((string) $conEquipo['w']) ?>" data-role="w">
          </label>
        </div>
      <?php endforeach; ?>
      <?php unset($conEquipo); ?>
    </div>

    <label class="field">
      <span>Precio por kWh de su factura (₲, opcional): divida el total por los kWh consumidos</span>
      <input type="number" inputmode="numeric" min="0" step="1" name="precio" id="consumo-precio" placeholder="Ej.: total ÷ kWh de su última factura">
    </label>

    <div class="btn-row">
      <button class="btn btn--primary" type="submit"><?= e(ui('tools.calculate')) ?></button>
    </div>
  </form>

  <div class="tool-result" id="consumo-result" hidden aria-live="polite">
    <h2 class="card-title"><?= e(ui('tools.result_title')) ?></h2>
    <p class="tool-result__value" id="consumo-total"></p>
    <dl class="tool-result__lines" id="consumo-top"></dl>
    <ul class="checklist mt-3" id="consumo-tips"></ul>
    <p class="note">Heladeras, freezers y aires no consumen todo el tiempo: el cálculo ya considera el ciclo del
      compresor. <?= e(ui('tools.orientativo')) ?></p>
    <div class="btn-row mt-3">
      <button class="btn btn--primary" type="button" id="consumo-use-result">Quiero bajar mi factura</button>
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

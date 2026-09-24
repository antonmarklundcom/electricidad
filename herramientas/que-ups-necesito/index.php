<?php
/**
 * ¿Qué UPS necesito? VA recomendados y energía de batería para la autonomía
 * pedida. Arithmetic in assets/js/tools/que-ups-necesito.js; figures from
 * market_table('energia')['ups'], embedded below as JSON.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'que-ups-necesito';
$tool = content('tools')[$slug];
$ups  = market_table('energia')['ups'];

ob_start();
?>
<div class="tool card" data-tool="<?= e($slug) ?>">
  <script type="application/json" id="energia-data"><?= json_encode(['ups' => $ups], JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?></script>
  <form class="tool-form" id="ups-form" novalidate>
    <p class="note">Marque los equipos que quiere mantener encendidos durante un corte o una baja de tensión.</p>
    <div class="equipos">
      <?php foreach ($ups['equipos'] as $upsEquipo): ?>
        <div class="equipo-row" data-id="<?= e($upsEquipo['id']) ?>" data-motor="<?= $upsEquipo['motor'] ? '1' : '0' ?>">
          <span class="equipo-row__label"><?= e($upsEquipo['label']) ?></span>
          <label class="field equipo-row__field">
            <span>Cantidad</span>
            <input type="number" inputmode="numeric" min="0" max="50" step="1" value="0" data-role="qty">
          </label>
          <label class="field equipo-row__field">
            <span>Watts</span>
            <input type="number" inputmode="numeric" min="0" step="1" value="<?= e((string) $upsEquipo['w']) ?>" data-role="w">
          </label>
        </div>
      <?php endforeach; ?>
      <?php unset($upsEquipo); ?>
    </div>

    <label class="field">
      <span>¿Cuántos minutos de respaldo necesita?</span>
      <select name="minutos" id="ups-minutos">
        <option value="5">5 minutos (guardar y apagar)</option>
        <option value="15" selected>15 minutos</option>
        <option value="30">30 minutos</option>
        <option value="60">1 hora</option>
        <option value="120">2 horas</option>
        <option value="240">4 horas</option>
      </select>
    </label>

    <div class="btn-row">
      <button class="btn btn--primary" type="submit"><?= e(ui('tools.calculate')) ?></button>
    </div>
  </form>

  <div class="tool-result" id="ups-result" hidden aria-live="polite">
    <h2 class="card-title"><?= e(ui('tools.result_title')) ?></h2>
    <p class="tool-result__value" id="ups-va"></p>
    <dl class="tool-result__lines">
      <dt>Carga conectada</dt>
      <dd id="ups-carga"></dd>
      <dt>Batería necesaria</dt>
      <dd id="ups-bateria"></dd>
    </dl>
    <p class="note" id="ups-aviso"></p>
    <p class="note"><?= e(ui('tools.orientativo')) ?></p>
    <div class="btn-row mt-3">
      <button class="btn btn--primary" type="button" id="ups-use-result">Pedir presupuesto con este resultado</button>
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

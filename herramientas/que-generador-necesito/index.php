<?php
/**
 * ¿Qué generador necesito? Potencia en marcha, pico de arranque y kVA
 * recomendados a partir de la lista de equipos que el visitante quiere usar
 * durante un corte. Arithmetic in assets/js/tools/que-generador-necesito.js;
 * figures from market_table('energia'), embedded below as JSON.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug    = 'que-generador-necesito';
$tool    = content('tools')[$slug];
$energia = market_table('energia');

ob_start();
?>
<div class="tool card" data-tool="<?= e($slug) ?>">
  <script type="application/json" id="energia-data"><?= json_encode(['generador' => $energia['generador'], 'equipos' => $energia['equipos']], JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?></script>
  <form class="tool-form" id="gen-form" novalidate>
    <p class="note">Marque cuántos de cada equipo quiere que funcionen <strong>al mismo tiempo</strong> durante un corte. Si conoce la potencia de placa de su equipo, corríjala.</p>
    <div class="equipos">
      <?php foreach ($energia['equipos'] as $genEquipo): ?>
        <div class="equipo-row" data-id="<?= e($genEquipo['id']) ?>">
          <span class="equipo-row__label"><?= e($genEquipo['label']) ?></span>
          <label class="field equipo-row__field">
            <span>Cantidad</span>
            <input type="number" inputmode="numeric" min="0" max="50" step="1" value="0" data-role="qty">
          </label>
          <label class="field equipo-row__field">
            <span>Watts</span>
            <input type="number" inputmode="numeric" min="0" step="1" value="<?= e((string) $genEquipo['w']) ?>" data-role="w">
          </label>
        </div>
      <?php endforeach; ?>
      <?php unset($genEquipo); ?>
      <div class="equipo-row" data-id="otro">
        <span class="equipo-row__label">Otro equipo (sin motor)</span>
        <label class="field equipo-row__field">
          <span>Cantidad</span>
          <input type="number" inputmode="numeric" min="0" max="50" step="1" value="0" data-role="qty">
        </label>
        <label class="field equipo-row__field">
          <span>Watts</span>
          <input type="number" inputmode="numeric" min="0" step="1" value="0" data-role="w">
        </label>
      </div>
    </div>

    <div class="btn-row">
      <button class="btn btn--primary" type="submit"><?= e(ui('tools.calculate')) ?></button>
    </div>
  </form>

  <div class="tool-result" id="gen-result" hidden aria-live="polite">
    <h2 class="card-title"><?= e(ui('tools.result_title')) ?></h2>
    <p class="tool-result__value" id="gen-kva"></p>
    <dl class="tool-result__lines">
      <dt>Potencia en marcha</dt>
      <dd id="gen-marcha"></dd>
      <dt>Pico de arranque</dt>
      <dd id="gen-pico"></dd>
      <dt>Instalación</dt>
      <dd id="gen-fase"></dd>
      <dt>Consumo de combustible</dt>
      <dd id="gen-litros"></dd>
    </dl>
    <p class="note">Incluye un margen del <?= e((string) round(($energia['generador']['headroom'] - 1) * 100)) ?> % y
      considera que arranca un motor por vez. <?= e(ui('tools.orientativo')) ?></p>
    <div class="btn-row mt-3">
      <button class="btn btn--primary" type="button" id="gen-use-result">Pedir presupuesto con este resultado</button>
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

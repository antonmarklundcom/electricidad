<?php
declare(strict_types=1);
$prepService = $formService ?? (current_lead_slug() ?? '');
$prepNeed = $formNeed ?? ($prepService !== '' ? lead_value($prepService)['need'] : '');
?>
<form class="lead-form prepare-form" data-lead-form data-prepare-form>
  <p class="eyebrow">Prepare su consulta</p>
  <h2 class="card-title">Primero, lo que necesita.</h2>
  <p class="note">La recepción de solicitudes todavía no está habilitada. Este resumen queda en su navegador: no se envía ni reserva una visita.</p>
  <fieldset class="prepare-fields" data-prepare-fields disabled>
  <input type="hidden" name="service" value="<?= e($prepService) ?>">
  <input type="hidden" name="tool_result" value="" data-tool-result>
  <label class="field"><span>¿Qué necesita?</span><select name="need" required>
    <option value="">Elegir…</option>
    <?php foreach (content('ui')['needs'] as $prepKey => $prepLabel): ?>
      <option value="<?= e($prepKey) ?>"<?= $prepNeed === $prepKey ? ' selected' : '' ?>><?= e($prepLabel) ?></option>
    <?php endforeach; ?>
  </select></label>
  <label class="field"><span>Ciudad o zona</span><input name="ciudad" maxlength="100" required placeholder="Ej.: Luque, zona centro" autocomplete="off"></label>
  <label class="field"><span>Descripción breve</span><textarea name="message" rows="3" maxlength="1000" required placeholder="Qué pasa, desde cuándo y si es una casa o un negocio"></textarea></label>
  <p class="note">No incluya documentos, teléfonos ni direcciones exactas. No abra un tablero para obtener fotos.</p>
  <button type="submit" class="btn btn--primary">Preparar resumen</button>
  <div class="prepare-result" data-prepare-result hidden>
    <label class="field"><span>Su resumen — todavía no enviado</span><textarea readonly rows="6" data-summary></textarea></label>
    <button type="button" class="btn btn--secondary" data-copy-summary>Copiar resumen</button>
    <p class="note" role="status" data-copy-status></p>
  </div>
  </fieldset>
  <noscript><p class="note">Puede anotar su necesidad, ciudad y descripción. Para generar el resumen aquí, active JavaScript. No hay envío disponible.</p></noscript>
</form>
<?php unset($prepService, $prepNeed, $prepKey, $prepLabel); ?>

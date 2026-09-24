<?php
/**
 * Pre-summer electrical checklist: readable and printable (Imprimir / guardar
 * PDF uses the browser's own print-to-PDF, so there is no file to keep in
 * sync), with the "que lo revise un electricista" form underneath. Leads from
 * here arrive as form 'checklist', preset to mantenimiento-electrico.
 */

require __DIR__ . '/../lib/bootstrap.php';

$meta = page_meta('/checklist-electrico/');
$page = [
    'title'       => $meta['title'],
    'description' => $meta['description'],
    'path'        => '/checklist-electrico/',
    'breadcrumbs' => [['label' => $meta['h1'], 'path' => '/checklist-electrico/']],
    'leadSlug'    => 'mantenimiento-electrico',
];
$checklist = content('checklist');

require ROOT_DIR . '/partials/head.php';
require ROOT_DIR . '/partials/header.php';
?>
<main id="main">
  <section class="page-hero">
    <div class="container">
      <?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
      <div class="page-hero__inner">
        <p class="eyebrow">Checklist gratuito</p>
        <h1><?= e($meta['h1']) ?></h1>
        <p class="lead"><?= e($meta['lead']) ?></p>
        <div class="btn-row no-print">
          <button class="btn btn--primary" type="button" onclick="window.print()">Imprimir o guardar en PDF</button>
          <a class="btn btn--secondary" href="#revision">Que lo revise un electricista</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container checklist-page">
      <?php foreach ($checklist['groups'] as $clIndex => $clGroup): ?>
        <div class="checklist-group">
          <h2><?= e($clGroup['title']) ?></h2>
          <ul class="check-items">
            <?php foreach ($clGroup['items'] as $clItemIndex => $clItem): ?>
              <li>
                <input type="checkbox" id="cl-<?= e($clIndex . '-' . $clItemIndex) ?>">
                <label for="cl-<?= e($clIndex . '-' . $clItemIndex) ?>"><?= e($clItem) ?></label>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
      <?php unset($clIndex, $clGroup, $clItemIndex, $clItem); ?>
      <p class="note">Si marcó que algo no está bien, no lo toque: baje la llave general si hay olor a quemado o
        chispas, y escríbanos con una foto.</p>
    </div>
  </section>

  <section class="section section--surface no-print" id="revision">
    <div class="container split split--top">
      <div class="stack">
        <p class="eyebrow">Revisión antes del verano</p>
        <h2>¿Algún punto no le cerró? Lo revisamos.</h2>
        <p class="lead">Mándenos qué ítems marcó y una foto del tablero: le cotizamos la revisión por WhatsApp.</p>
      </div>
      <div>
        <?php
        $formId      = 'checklist';
        $formService = 'mantenimiento-electrico';
        $formNeed    = 'tablero';
        $formHeading = '';
        require ROOT_DIR . '/partials/lead-form.php';
        ?>
      </div>
    </div>
  </section>
</main>
<?php require ROOT_DIR . '/partials/footer.php'; ?>

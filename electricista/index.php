<?php
/**
 * Zones hub: the city landing pages from content/segmentos/zonas.php, listed
 * from nav('zonas') so a new city joins the hub by existing.
 */

require __DIR__ . '/../lib/bootstrap.php';

$meta = page_meta('/electricista/');
$page = [
    'title'       => $meta['title'],
    'description' => $meta['description'],
    'path'        => '/electricista/',
    'breadcrumbs' => [['label' => ui('nav.zones'), 'path' => '/electricista/']],
];

require ROOT_DIR . '/partials/head.php';
require ROOT_DIR . '/partials/header.php';
?>
<main id="main">
  <section class="page-hero">
    <div class="container">
      <?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
      <div class="page-hero__inner">
        <p class="eyebrow"><?= e(ui('home.zones_eyebrow')) ?></p>
        <h1><?= e($meta['h1']) ?></h1>
        <p class="lead"><?= e($meta['lead']) ?></p>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <ul class="zone-grid">
        <?php foreach (nav('zonas') as $hubZona): ?>
          <li><a class="zone-link" href="<?= e($hubZona['path']) ?>">Electricista en <?= e($hubZona['label']) ?></a></li>
        <?php endforeach; ?>
        <?php unset($hubZona); ?>
      </ul>
    </div>
  </section>

  <?php if (!empty($meta['sections'])): ?>
    <section class="section section--surface">
      <div class="container stack">
        <?php foreach ($meta['sections'] as $hubBlock): ?>
          <div class="prose">
            <h2><?= e($hubBlock['h2'] ?? '') ?></h2>
            <?php foreach ($hubBlock['body'] ?? [] as $hubParagraph): ?>
              <p><?= e($hubParagraph) ?></p>
            <?php endforeach; ?>
          </div>
        <?php endforeach; ?>
        <?php unset($hubBlock, $hubParagraph); ?>
      </div>
    </section>
  <?php endif; ?>

  <?php require ROOT_DIR . '/partials/cta-band.php'; ?>
</main>
<?php require ROOT_DIR . '/partials/footer.php'; ?>

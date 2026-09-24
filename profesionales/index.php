<?php
/**
 * Supply side of the marketplace: electricians and energy suppliers who want to
 * receive the leads this site generates. Its form reports source
 * 'profesionales' to VenderCRM so partner applications never mix with client
 * requests; the WhatsApp link carries its own prefill for the same reason.
 */

require __DIR__ . '/../lib/bootstrap.php';

$meta = page_meta('/profesionales/');
$page = [
    'title'       => $meta['title'],
    'description' => $meta['description'],
    'path'        => '/profesionales/',
    'breadcrumbs' => [['label' => ui('nav.partners'), 'path' => '/profesionales/']],
];

$proWhatsapp = whatsapp_link('Hola, soy electricista / proveedor de energía y quiero sumarme a la red de '
    . site('domain') . '. Trabajo en: ');

require ROOT_DIR . '/partials/head.php';
require ROOT_DIR . '/partials/header.php';
?>
<main id="main">
  <section class="page-hero">
    <div class="container">
      <?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
      <div class="page-hero__inner">
        <p class="eyebrow"><?= e(ui('nav.partners')) ?></p>
        <h1><?= e($meta['h1']) ?></h1>
        <p class="lead"><?= e($meta['lead']) ?></p>
        <div class="btn-row">
          <a class="btn btn--primary" href="#sumarse">Quiero sumarme</a>
          <?php if ($proWhatsapp !== null): ?>
            <a class="btn btn--secondary" href="<?= e($proWhatsapp) ?>" rel="noopener"><?= e(ui('cta.whatsapp')) ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <?php if (!empty($meta['sections'])): ?>
    <section class="section">
      <div class="container stack">
        <?php foreach ($meta['sections'] as $proBlock): ?>
          <div class="prose">
            <h2><?= e($proBlock['h2'] ?? '') ?></h2>
            <?php foreach ($proBlock['body'] ?? [] as $proParagraph): ?>
              <p><?= e($proParagraph) ?></p>
            <?php endforeach; ?>
          </div>
        <?php endforeach; ?>
        <?php unset($proBlock, $proParagraph); ?>
      </div>
    </section>
  <?php endif; ?>

  <section class="section section--surface" id="sumarse">
    <div class="container split split--top">
      <div class="stack">
        <p class="eyebrow">Sumarse a la red</p>
        <h2>Cuéntenos quién es y dónde trabaja.</h2>
        <p class="lead">En "Barrio y ciudad" ponga las zonas que cubre; en el mensaje, su especialidad
          (residencial, comercial, solar, generadores) y si tiene matrícula o empresa.</p>
      </div>
      <div>
        <?php
        $formId      = 'profesionales';
        $formService = '';
        $formNeed    = 'otro';
        $formHeading = '';
        require ROOT_DIR . '/partials/lead-form.php';
        ?>
      </div>
    </div>
  </section>
</main>
<?php require ROOT_DIR . '/partials/footer.php'; ?>

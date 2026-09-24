<?php
/**
 * Homepage: hero (WhatsApp first, trust chips, the "así llega su pedido"
 * panel), the two service tracks (electricista / energía), the "sin sorpresas"
 * band, the process block, the calculators, the zones, testimonials (or the
 * rubros band while there are none) and the contact section.
 *
 * Everything the page says about the business comes from content/site.php, and
 * every one of those values starts as null. So the stat row, the "N años"
 * badge, the credential list and the testimonials band all hide or fall back to
 * neutral phrasing rather than ship an invented figure. Filling in
 * content/site.php switches them on with no code change.
 */

require __DIR__ . '/lib/bootstrap.php';

$meta = page_meta('/');
$page = [
    'title'       => $meta['title'],
    'description' => $meta['description'],
    'path'        => '/',
    'faq'         => $meta['faq'] ?? [],
];

/* Only real, confirmed figures reach the hero. Anything without a value and a
   label is dropped rather than padded out. */
$homeStats = array_values(array_filter(
    (array) site('stats'),
    static fn ($s) => is_array($s) && !empty($s['value']) && !empty($s['label'])
));

$homeCredentials = array_values(array_filter((array) site('credentials')));
if ($homeCredentials === []) {
    $homeCredentials = content('ui')['about']['credentials'];
}

/* The same predicate partials/testimonials.php uses, so the page never ends up
   choosing the testimonials band and then rendering neither of the two. */
$homeTestimonials = array_filter(
    (array) site('testimonials'),
    static fn ($t) => is_array($t) && !empty($t['quote'])
);

/* The homepage names no single service, so this is the model's neutral
   default — still a message about the visitor's business, never the button's
   own label. */
$homeWhatsapp = whatsapp_link(whatsapp_text_for_page());
$homePhotos   = (array) site('photos');

require ROOT_DIR . '/partials/head.php';
require ROOT_DIR . '/partials/header.php';
?>
<main id="main">

  <!-- Hero ------------------------------------------------------------- -->
  <section class="hero hero--home">
    <div class="container hero__grid">

      <div class="hero__copy">
        <span class="pill">
          <span class="pill__dot" aria-hidden="true"></span>
          <?= e(ui('home.eyebrow')) ?>
        </span>

        <h1><?= e(ui('home.h1_lead')) ?><span class="accent"><?= e(ui('home.h1_accent')) ?></span></h1>

        <p class="lead hero__lead"><?= e(ui('home.lead')) ?></p>

        <div class="btn-row">
          <?php if ($homeWhatsapp !== null): ?>
            <a class="btn btn--whatsapp" href="<?= e($homeWhatsapp) ?>" rel="noopener"><?= e(ui('cta.whatsapp_long')) ?></a>
            <a class="btn btn--secondary" href="#contacto"><?= e(ui('cta.consult')) ?></a>
          <?php else: ?>
            <a class="btn btn--primary" href="#contacto"><?= e(ui('cta.consult')) ?></a>
            <a class="btn btn--secondary" href="#servicios"><?= e(ui('cta.see_included')) ?></a>
          <?php endif; ?>
        </div>

        <ul class="trust-chips">
          <?php foreach (content('ui')['home']['trust'] as $homeTrust): ?>
            <li><?= e($homeTrust) ?></li>
          <?php endforeach; ?>
        </ul>

        <?php if ($homeStats !== []): ?>
          <div class="stat-row">
            <?php foreach ($homeStats as $homeStat): ?>
              <div class="stat">
                <span class="stat__value"><?= e($homeStat['value']) ?></span>
                <span class="stat__label"><?= e($homeStat['label']) ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>

      <div class="hero__panel">
        <?php require ROOT_DIR . '/partials/status-panel.php'; ?>
      </div>

    </div>
  </section>

  <!-- Servicios -------------------------------------------------------- -->
  <section class="section section--surface" id="servicios">
    <div class="container">
      <div class="section-head section-head--split">
        <div class="section-head__text">
          <p class="eyebrow"><?= e(ui('home.services_eyebrow')) ?></p>
          <h2><?= e(ui('home.services_title')) ?></h2>
        </div>
        <p class="section-head__aside"><?= e(ui('home.services_lead')) ?></p>
      </div>

      <?php
      /* Two tracks, one per cluster: the first three services of each, so a
         service added to content/services/*.php can reach this band by order. */
      $homeTracks = [];
      foreach (services() as $homeSlug => $homeService) {
          $homeTracks[$homeService['cluster']][] = $homeSlug;
      }
      ?>
      <div class="tracks">
        <?php foreach (['electricista', 'energia'] as $homeCluster): ?>
          <div class="track track--<?= e($homeCluster) ?>">
            <div class="track__head">
              <h3 class="card-title"><?= e(ui('home.track_' . $homeCluster . '_title')) ?></h3>
              <p class="card__text"><?= e(ui('home.track_' . $homeCluster . '_text')) ?></p>
            </div>
            <ul class="track__list">
              <?php foreach ($homeTracks[$homeCluster] ?? [] as $homeSlug): ?>
                <li><a href="<?= e(services($homeSlug)['path']) ?>"><?= e(services($homeSlug)['navLabel']) ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
        <?php unset($homeCluster, $homeSlug, $homeService); ?>
      </div>

      <div class="unsure">
        <div class="unsure__copy">
          <h3 class="card-title"><?= e(ui('home.unsure_title')) ?></h3>
          <p><?= e(ui('home.unsure_text')) ?></p>
        </div>
        <a class="btn btn--primary" href="<?= e($homeWhatsapp ?? '/contacto/') ?>"<?= $homeWhatsapp ? ' rel="noopener"' : '' ?>>
          <?= e(ui('cta.talk')) ?>
        </a>
      </div>

      <p class="mt-4"><a href="<?= e(services_hub_path()) ?>"><?= e(ui('nav.all_services')) ?> &rarr;</a></p>
    </div>
  </section>

  <!-- Credibilidad ------------------------------------------------------ -->
  <section class="section">
    <div class="container split">

      <?php
      /* With no photography in content/site.php the two slots are decorative
         texture on desktop, where they hold the composition together; on a
         phone they would be a screenful of nothing, so .figures--empty drops
         them there and keeps only the badge. */
      $homeHasPhotos = !empty($homePhotos['portrait']['src']) || !empty($homePhotos['team']['src']);
      ?>
      <div class="figures<?= $homeHasPhotos ? '' : ' figures--empty' ?>">
        <?php if (!empty($homePhotos['portrait']['src'])): ?>
          <img class="figures__tall" src="<?= e(asset($homePhotos['portrait']['src'])) ?>"
               alt="<?= e($homePhotos['portrait']['alt'] ?? '') ?>" width="420" height="560" loading="lazy">
        <?php else: ?>
          <div class="figures__tall figures__slot" aria-hidden="true"></div>
        <?php endif; ?>

        <div class="figures__col">
          <?php if (!empty($homePhotos['team']['src'])): ?>
            <img class="figures__square" src="<?= e(asset($homePhotos['team']['src'])) ?>"
                 alt="<?= e($homePhotos['team']['alt'] ?? '') ?>" width="420" height="420" loading="lazy">
          <?php else: ?>
            <div class="figures__square figures__slot" aria-hidden="true"></div>
          <?php endif; ?>

          <div class="figures__badge">
            <?php if (site('foundedYear')): ?>
              <span class="figures__badge-value"><?= e((string) (((int) date('Y')) - (int) site('foundedYear'))) ?> años</span>
              <span class="figures__badge-note"><?= e(ui('about.badge_note')) ?></span>
            <?php else: ?>
              <span class="figures__badge-note figures__badge-note--solo"><?= e(ui('about.badge_fallback')) ?></span>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="stack">
        <p class="eyebrow"><?= e(ui('about.eyebrow')) ?></p>
        <h2><?= e(ui('about.title')) ?></h2>
        <div class="prose"><p><?= e(ui('about.text')) ?></p></div>
        <ul class="checklist">
          <?php foreach ($homeCredentials as $homeCredential): ?>
            <li><span><?= e($homeCredential) ?></span></li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>
  </section>

  <!-- Proceso ----------------------------------------------------------- -->
  <?php require ROOT_DIR . '/partials/process.php'; ?>

  <!-- Calculadoras ------------------------------------------------------ -->
  <section class="section section--surface" id="calculadoras">
    <div class="container">
      <div class="section-head section-head--split">
        <div class="section-head__text">
          <p class="eyebrow"><?= e(ui('home.tools_eyebrow')) ?></p>
          <h2><?= e(ui('home.tools_title')) ?></h2>
        </div>
        <p class="section-head__aside"><?= e(ui('home.tools_lead')) ?></p>
      </div>
      <div class="grid grid--3">
        <?php foreach (content('tools') as $homeTool): ?>
          <a class="card card--link" href="<?= e($homeTool['path']) ?>">
            <h3 class="card-title"><?= e($homeTool['navLabel']) ?></h3>
            <p class="card__text"><?= e($homeTool['hero']['lead']) ?></p>
          </a>
        <?php endforeach; ?>
        <?php unset($homeTool); ?>
      </div>
    </div>
  </section>

  <!-- Zonas ------------------------------------------------------------- -->
  <section class="section" id="zonas">
    <div class="container">
      <div class="section-head section-head--split">
        <div class="section-head__text">
          <p class="eyebrow"><?= e(ui('home.zones_eyebrow')) ?></p>
          <h2><?= e(ui('home.zones_title')) ?></h2>
        </div>
        <p class="section-head__aside"><?= e(ui('home.zones_lead')) ?></p>
      </div>
      <ul class="zone-grid">
        <?php foreach (nav('zonas') as $homeZona): ?>
          <li><a class="zone-link" href="<?= e($homeZona['path']) ?>"><?= e($homeZona['label']) ?></a></li>
        <?php endforeach; ?>
        <?php unset($homeZona); ?>
      </ul>
    </div>
  </section>

  <!-- Preguntas frecuentes ---------------------------------------------- -->
  <?php if ($page['faq'] !== []): ?>
    <section class="section section--surface">
      <div class="container">
        <?php $faqItems = $page['faq']; ?>
        <?php require ROOT_DIR . '/partials/faq.php'; ?>
      </div>
    </section>
  <?php endif; ?>

  <!-- Casos, or the rubros band while there are no testimonials ---------- -->
  <?php if ($homeTestimonials !== []): ?>
    <?php require ROOT_DIR . '/partials/testimonials.php'; ?>
  <?php else: ?>
    <?php require ROOT_DIR . '/partials/industries.php'; ?>
  <?php endif; ?>

  <!-- Contacto ---------------------------------------------------------- -->
  <section class="section" id="contacto">
    <div class="container split">

      <div class="stack">
        <p class="eyebrow"><?= e(ui('cta_band.eyebrow')) ?></p>
        <h2 class="d2"><?= e(ui('cta_band.title')) ?></h2>
        <div class="prose"><p><?= e(ui('cta_band.lead')) ?></p></div>

        <div class="btn-row">
          <?php if ($homeWhatsapp !== null): ?>
            <a class="btn btn--whatsapp" href="<?= e($homeWhatsapp) ?>" rel="noopener"><?= e(ui('cta.whatsapp_long')) ?></a>
          <?php endif; ?>
          <?php if (site('phone')): ?>
            <a class="btn btn--secondary" href="tel:+<?= e(phone_digits(site('phone'))) ?>"><?= e(site('phone')) ?></a>
          <?php else: ?>
            <a class="btn btn--secondary" href="/contacto/"><?= e(ui('nav.contact')) ?></a>
          <?php endif; ?>
        </div>

        <?php
        $homeNap = array_values(array_filter([
            site('street') ? trim(site('street') . ', ' . site('city'), ', ') : site('city'),
            site('hours'),
        ]));
        ?>
        <?php if ($homeNap !== []): ?>
          <p class="note"><?= e(implode(' · ', $homeNap)) ?></p>
        <?php endif; ?>

        <ul class="checklist">
          <?php foreach (content('ui')['contact']['steps'] as $homeStep): ?>
            <li><span><?= e($homeStep) ?></span></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div>
        <?php
        $formId      = 'home';
        $formHeading = '';
        require ROOT_DIR . '/partials/lead-form.php';
        ?>
      </div>

    </div>
  </section>

</main>
<?php require ROOT_DIR . '/partials/footer.php'; ?>

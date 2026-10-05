<?php
require __DIR__ . '/lib/bootstrap.php';
$meta = page_meta('/');
$page = ['title' => $meta['title'], 'description' => $meta['description'], 'path' => '/', 'faq' => $meta['faq']];
require ROOT_DIR . '/partials/head.php';
require ROOT_DIR . '/partials/header.php';
?>
<main id="main">
  <section class="home-intro">
    <div class="container intro-grid">
      <div class="intro-copy">
        <p class="eyebrow">Electricidad y energía · Paraguay</p>
        <h1>Su casa. Su negocio.<br><span>Una decisión más clara.</span></h1>
        <p class="lead">¿Una falla, una instalación nueva o respaldo para sus equipos? Encuentre el tema, haga una primera estimación y prepare lo que necesita consultar.</p>
        <div class="btn-row"><a class="btn btn--primary" href="#necesidad">Encontrar mi necesidad <span aria-hidden="true">↗</span></a><a class="intro-tool-link" href="/herramientas/">Usar las calculadoras <span aria-hidden="true">→</span></a></div>
        <div class="intro-foot"><span>Para hogares y negocios</span><span>Sin registro</span><span>Estimaciones orientativas</span></div>
      </div>
      <figure class="intro-visual">
        <picture><source type="image/webp" srcset="/assets/img/home-energy-640.webp 640w, /assets/img/home-energy-1024.webp 1024w" sizes="(max-width: 900px) 100vw, 48vw"><img src="/assets/img/home-energy-1024.webp" alt="Ilustración de una vivienda con iluminación cálida y un tablero cerrado" width="1024" height="768" fetchpriority="high" decoding="async"></picture>
        <div class="visual-label"><span class="visual-bolt" aria-hidden="true">ϟ</span><div><strong>Todo empieza con su necesidad.</strong><span>Instalación · Reparación · Energía</span></div></div>
        <figcaption>Imagen ilustrativa generada con IA. No muestra una obra ni un cliente de Electricidad PY.</figcaption>
      </figure>
    </div>
  </section>
  <section class="section needs-section" id="necesidad"><div class="container">
    <div class="section-head section-head--split"><div><p class="eyebrow">Empiece por acá</p><h2>¿Qué necesita resolver?</h2></div><p class="section-head__aside">Elija por el problema o por el proyecto.<br>La atención y la cobertura deben confirmarse.</p></div>
    <div class="need-grid">
      <a class="need-card" href="/servicios/cortocircuito-y-fallas/"><span class="need-number">01 / REPARACIÓN</span><h3>Algo dejó<br>de funcionar.</h3><p>Fallas, cortocircuitos o un disyuntor que salta. Datos útiles para consultar.</p><span class="need-link">Ver fallas y reparaciones <span aria-hidden="true">↗</span></span></a>
      <a class="need-card" href="/servicios/instalacion-electrica-residencial/"><span class="need-number">02 / INSTALACIÓN</span><h3>Una instalación<br>o una reforma.</h3><p>Cableado, tablero e iluminación. Separe el alcance de los materiales.</p><span class="need-link">Ver instalaciones <span aria-hidden="true">↗</span></span></a>
      <a class="need-card need-card--dark" href="/servicios/generadores/"><span class="need-number">03 / ENERGÍA</span><h3>Respaldo para<br>sus equipos.</h3><p>Solar, generador o UPS. Compare alternativas según su consumo.</p><span class="need-link">Ver energía y respaldo <span aria-hidden="true">↗</span></span></a>
    </div>
    <div class="needs-bottom"><a href="/servicios/">Ver todos los temas de servicio →</a><a href="/segmentos/comercio-y-locales/">Tengo un comercio o una oficina →</a></div>
  </div></section>
  <section class="section decision-section"><div class="container split">
    <div class="stack"><p class="eyebrow">Antes de contratar</p><h2>Más claridad.<br>Menos suposiciones.</h2><p class="lead">Una consulta bien preparada ayuda a definir qué se debe evaluar. La visita, el precio y las condiciones se acuerdan con el prestador.</p><a href="/precios/">Qué revisar en una cotización →</a></div>
    <div class="decision-list"><div><span>01</span><h3>El problema y la zona</h3><p>Qué sucede, desde cuándo y si es una casa, un local o una obra.</p></div><div><span>02</span><h3>El alcance del trabajo</h3><p>Qué se revisaría, qué materiales se contemplan y si hace falta una visita técnica.</p></div><div><span>03</span><h3>Quién responde y en qué condiciones</h3><p>Identidad, cobertura, costo, fecha y condiciones. Una consulta no equivale a una reserva.</p></div></div>
  </div></section>
  <section class="section section--surface" id="calculadoras"><div class="container">
    <div class="section-head section-head--split"><div><p class="eyebrow">Herramientas gratuitas</p><h2>Haga una primera cuenta.</h2></div><p class="section-head__aside">Resultados orientativos, sin registro.<br>El dimensionamiento final requiere evaluación.</p></div>
    <div class="grid grid--2"><?php foreach (content('tools') as $homeTool): ?><a class="card card--link" href="<?= e($homeTool['path']) ?>"><h3 class="card-title"><?= e($homeTool['navLabel']) ?></h3><p class="card__text"><?= e($homeTool['hero']['lead']) ?></p><span class="tool-card-action">Abrir calculadora →</span></a><?php endforeach; unset($homeTool); ?></div>
  </div></section>
  <section class="section" id="zonas"><div class="container">
    <div class="section-head section-head--split"><div><p class="eyebrow">Ubicación</p><h2>Información para su zona.</h2></div><p class="section-head__aside">Las páginas por ciudad son referencias.<br>No representan cobertura confirmada.</p></div>
    <ul class="zone-grid"><?php foreach (nav('zonas') as $homeZone): ?><li><a class="zone-link" href="<?= e($homeZone['path']) ?>"><?= e($homeZone['label']) ?></a></li><?php endforeach; unset($homeZone); ?></ul>
  </div></section>
  <section class="section section--surface"><div class="container"><?php $faqItems=$page['faq']; require ROOT_DIR.'/partials/faq.php'; ?></div></section>
  <section class="section" id="contacto"><div class="container split split--top">
    <div class="stack"><p class="eyebrow">Su siguiente paso</p><h2>Prepare su consulta.<br>Con lo justo.</h2><p class="lead">Necesidad, ciudad y descripción. No hace falta una cuenta ni adjuntar documentos.</p><div class="role-card"><h3>El estado de la atención</h3><?php if(contact_ready()): ?><p>La solicitud la recibe <?= e(cfg('OPERATOR_NAME')) ?>. La disponibilidad y las condiciones deben confirmarse.</p><?php else: ?><p>Puede consultar por WhatsApp. El formulario web sigue pendiente de confirmar operador y CRM; aquí el resumen queda en su navegador.</p><?php endif; ?><p>No hay atención urgente ni servicio 24 horas confirmado.</p></div><a href="/contacto/">Ver contacto y próximos pasos →</a></div>
    <div><?php $formId='home'; require ROOT_DIR.'/partials/lead-form.php'; ?></div>
  </div></section>
</main>
<?php require ROOT_DIR . '/partials/footer.php'; ?>

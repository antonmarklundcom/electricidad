# Confirmaciones antes de publicar — 2026-10-05

La web ya está publicada. Anton confirmó el **+595 992 279599** para contacto y
WhatsApp. Los enlaces identifican sitio, página y tema. Abrir WhatsApp no envía
el mensaje ni confirma una visita. No se cambió producción en esta revisión.

Prioridad:

1. Identificar operador legal y confirmar ejecución propia o mediación,
   prestadores, matrícula cuando corresponda, ciudades efectivamente atendidas,
   disponibilidad y canal de privacidad.
2. Probar recepción del WhatsApp confirmado. Definir quién responde y qué puede
   atender. No se promete urgencia ni 24 horas.
3. Para activar formulario: confirmar cuenta y destinatario real de VenderCRM,
   privacidad, conservación y permisos de registros. Configurar `OPERATOR_NAME`,
   `LEADS_ENABLED=1` y credenciales solo en el servidor; probar recepción autorizada.
4. Revisar tarifas, autogeneración, precios y supuestos en `facts-to-verify.md`.
   No hay financiación ni suscripción confirmada.
5. Backup y staging Hostinger: Apache/.htaccess, privados, SSL, redirecciones,
   extensiones PHP, logs, proxy y CRM. El límite usa `REMOTE_ADDR`; confirmar
   proxy antes de confiar en cabeceras reenviadas.
6. `PUBLICATION_READY=1` solo después de las comprobaciones. El paquete entregado
   tiene noindex, robots Disallow y sitemap vacío. Ciudades siguen noindex y
   fuera del sitemap hasta añadir cobertura confirmada en `content/site.php`.

PR normal por instrucción expresa de Anton, no draft. Merge no publica la web.
No subir directamente este paquete cerrado a producción sin completar la lista.

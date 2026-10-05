(function () {
  'use strict';
  document.querySelectorAll('[data-prepare-form]').forEach(function (form) {
    // Without JavaScript the local-only fields stay disabled: no native GET.
    form.querySelector('[data-prepare-fields]').disabled = false;
    var result = form.querySelector('[data-prepare-result]');
    var summary = form.querySelector('[data-summary]');
    var status = form.querySelector('[data-copy-status]');
    form.addEventListener('submit', function (event) {
      event.preventDefault();
      if (!form.reportValidity()) return;
      var need = form.querySelector('[name=need]');
      summary.value = 'Consulta de electricidad (sin enviar)\nNecesidad: '
        + need.options[need.selectedIndex].textContent
        + '\nZona: ' + form.elements.ciudad.value.trim()
        + '\nDetalle: ' + form.elements.message.value.trim();
      result.hidden = false;
      summary.focus();
      status.textContent = 'Resumen preparado. No se enviaron datos.';
    });
    form.querySelector('[data-copy-summary]').addEventListener('click', async function () {
      try {
        await navigator.clipboard.writeText(summary.value);
        status.textContent = 'Copiado. Usted decide con quién compartirlo.';
      } catch (_) {
        summary.focus();
        summary.select();
        status.textContent = 'Seleccione y copie el texto con su navegador.';
      }
    });
  });
}());

/**
 * ¿Qué generador necesito? Potencia en marcha = Σ W × cantidad. Pico = marcha +
 * el mayor sobrepico de arranque de un solo motor (arrancan de a uno). kVA =
 * máx(marcha × margen, pico) ÷ factor de potencia, redondeado al tamaño
 * comercial siguiente. Figures from market_table('energia') via #energia-data.
 */
(function (window, document) {
  "use strict";

  var form = document.getElementById("gen-form");
  var dataEl = document.getElementById("energia-data");
  if (!form || !dataEl) {
    return;
  }

  var data = JSON.parse(dataEl.textContent);
  var cfg = data.generador;
  var byId = {};
  data.equipos.forEach(function (eq) { byId[eq.id] = eq; });

  var $ = function (id) { return document.getElementById(id); };
  var fmtNum = function (n, d) {
    return Number(n).toLocaleString("es-PY", { minimumFractionDigits: d || 0, maximumFractionDigits: d || 0 });
  };
  var lastResult = null;

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    var marcha = 0;
    var mayorSobrepico = 0;
    var elegidos = [];

    form.querySelectorAll(".equipo-row").forEach(function (row) {
      var qty = parseInt(row.querySelector('[data-role="qty"]').value, 10) || 0;
      var w = parseFloat(row.querySelector('[data-role="w"]').value) || 0;
      if (qty <= 0 || w <= 0) {
        return;
      }
      var eq = byId[row.getAttribute("data-id")] || { label: "Otro equipo", arranque: 1 };
      marcha += qty * w;
      mayorSobrepico = Math.max(mayorSobrepico, w * (eq.arranque - 1));
      elegidos.push(qty + " × " + eq.label);
    });

    if (marcha <= 0) {
      var first = form.querySelector('[data-role="qty"]');
      if (first) { first.focus(); }
      return;
    }

    var pico = marcha + mayorSobrepico;
    var kvaNecesario = Math.max(marcha * cfg.headroom, pico) / 1000 / cfg.powerFactor;
    var kva = cfg.tamaniosKva.filter(function (t) { return t >= kvaNecesario; })[0];
    var kvaTexto = kva ? fmtNum(kva, kva % 1 ? 1 : 0) + " kVA" : "más de " + cfg.tamaniosKva[cfg.tamaniosKva.length - 1] + " kVA";

    $("gen-kva").textContent = "Generador recomendado: " + kvaTexto;
    $("gen-marcha").textContent = fmtNum(marcha) + " W";
    $("gen-pico").textContent = fmtNum(pico) + " W";
    $("gen-fase").textContent = (kva && kva < cfg.trifasicaDesdeKva)
      ? "Monofásica (220 V) en la mayoría de los casos"
      : "Probablemente trifásica (380 V): conviene revisarlo en el lugar";
    var kw = marcha / 1000;
    $("gen-litros").textContent = "≈ " + fmtNum(kw * cfg.litrosPorKwh[0], 1) + " a " +
      fmtNum(kw * cfg.litrosPorKwh[1], 1) + " litros por hora (diésel, con esa carga)";
    $("gen-result").hidden = false;

    lastResult = "Calculadora de generador: " + elegidos.join(", ") + ". Marcha " + fmtNum(marcha) +
      " W, pico " + fmtNum(pico) + " W → " + kvaTexto + ".";

    if (window.ToolsShared) {
      window.ToolsShared.trackToolUsed("que_generador_necesito", { kva: kva || 0 });
    }
  });

  $("gen-use-result").addEventListener("click", function () {
    var leadForm = document.querySelector("form[data-lead-form]");
    if (!window.ToolsShared || !leadForm || !lastResult) {
      return;
    }
    window.ToolsShared.prefillLeadForm(leadForm, {
      need: "generador",
      message: lastResult,
      result: lastResult,
      service: "generadores"
    });
    window.ToolsShared.focusLeadForm(leadForm);
  });
})(window, document);

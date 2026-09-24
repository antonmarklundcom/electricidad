/**
 * ¿Qué UPS necesito? VA = carga W × margen ÷ factor de potencia, redondeado al
 * tamaño comercial siguiente. Batería Wh = W × horas ÷ (profundidad de
 * descarga × rendimiento). Más de 'maxMinutosUps' o equipos con motor → se
 * recomienda un inversor con baterías en lugar de una UPS de escritorio.
 */
(function (window, document) {
  "use strict";

  var form = document.getElementById("ups-form");
  var dataEl = document.getElementById("energia-data");
  if (!form || !dataEl) {
    return;
  }

  var cfg = JSON.parse(dataEl.textContent).ups;
  var labels = {};
  cfg.equipos.forEach(function (eq) { labels[eq.id] = eq.label; });
  var $ = function (id) { return document.getElementById(id); };
  var fmtNum = function (n) { return Number(n).toLocaleString("es-PY", { maximumFractionDigits: 0 }); };
  var lastResult = null;
  var lastService = "ups-estabilizadores";

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    var carga = 0;
    var conMotor = false;
    var elegidos = [];
    form.querySelectorAll(".equipo-row").forEach(function (row) {
      var qty = parseInt(row.querySelector('[data-role="qty"]').value, 10) || 0;
      var w = parseFloat(row.querySelector('[data-role="w"]').value) || 0;
      if (qty <= 0 || w <= 0) {
        return;
      }
      carga += qty * w;
      if (row.getAttribute("data-motor") === "1") {
        conMotor = true;
      }
      elegidos.push(qty + " × " + labels[row.getAttribute("data-id")]);
    });

    if (carga <= 0) {
      var first = form.querySelector('[data-role="qty"]');
      if (first) { first.focus(); }
      return;
    }

    var minutos = parseInt($("ups-minutos").value, 10) || 15;
    var vaNecesario = (carga * cfg.headroom) / cfg.powerFactor;
    var va = cfg.tamaniosVa.filter(function (t) { return t >= vaNecesario; })[0];
    var wh = (carga * (minutos / 60)) / (cfg.dod * cfg.eficiencia);
    var inversor = conMotor || minutos > cfg.maxMinutosUps || !va;
    lastService = inversor ? "baterias-respaldo" : "ups-estabilizadores";

    $("ups-va").textContent = inversor
      ? "Le conviene un inversor con baterías de al menos " + fmtNum(Math.ceil(vaNecesario / 100) * 100) + " VA"
      : "UPS recomendada: " + fmtNum(va) + " VA";
    $("ups-carga").textContent = fmtNum(carga) + " W";
    $("ups-bateria").textContent = "≈ " + fmtNum(Math.ceil(wh / 10) * 10) + " Wh para " + minutos + " minutos";
    $("ups-aviso").textContent = conMotor
      ? "Heladeras y portones tienen motor: arrancan con varias veces su potencia y necesitan un inversor de onda senoidal pura, no una UPS de computadora."
      : (minutos > cfg.maxMinutosUps
        ? "Para más de " + cfg.maxMinutosUps + " minutos, las UPS de escritorio quedan chicas: se usa un inversor con baterías de mayor capacidad."
        : "Una UPS de línea interactiva protege además de las bajas de tensión y los picos.");
    $("ups-result").hidden = false;

    lastResult = "Calculadora UPS: " + elegidos.join(", ") + ", " + minutos + " min → " +
      $("ups-va").textContent + ", batería ≈ " + fmtNum(wh) + " Wh.";

    if (window.ToolsShared) {
      window.ToolsShared.trackToolUsed("que_ups_necesito", { va: va || 0, minutos: minutos });
    }
  });

  $("ups-use-result").addEventListener("click", function () {
    var leadForm = document.querySelector("form[data-lead-form]");
    if (!window.ToolsShared || !leadForm || !lastResult) {
      return;
    }
    window.ToolsShared.prefillLeadForm(leadForm, {
      need: "generador",
      message: lastResult,
      result: lastResult,
      service: lastService
    });
    window.ToolsShared.focusLeadForm(leadForm);
  });
})(window, document);

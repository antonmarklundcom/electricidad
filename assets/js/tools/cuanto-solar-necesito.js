/**
 * ¿Cuántos paneles solares necesito? kWp = consumo cubierto ÷ (horas solares
 * pico × 30,4 días × rendimiento). Figures come from market_table('energia'),
 * embedded in the page as #energia-data — never hard-coded here.
 */
(function (window, document) {
  "use strict";

  var form = document.getElementById("solar-form");
  var dataEl = document.getElementById("energia-data");
  if (!form || !dataEl || !window.Market) {
    return;
  }

  var cfg = JSON.parse(dataEl.textContent).solar;
  var $ = function (id) { return document.getElementById(id); };
  var fmtNum = function (n, d) {
    return Number(n).toLocaleString("es-PY", { minimumFractionDigits: d || 0, maximumFractionDigits: d || 0 });
  };
  var lastResult = null;

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    var kwh = parseFloat($("solar-kwh").value) || 0;
    var monto = parseFloat($("solar-monto").value) || 0;
    var presupuesto = parseFloat($("solar-presupuesto").value) || 0;
    var cobertura = parseFloat((form.querySelector('input[name="cobertura"]:checked') || {}).value) || 0.8;

    if (kwh <= 0) {
      $("solar-kwh").focus();
      return;
    }

    var kwhPorKwpMes = cfg.hsp * 30.4 * cfg.performanceRatio;
    var kwp = (kwh * cobertura) / kwhPorKwpMes;
    var paneles = Math.max(1, Math.ceil((kwp * 1000) / cfg.panelW));
    var kwpReal = (paneles * cfg.panelW) / 1000;
    var generacion = kwpReal * kwhPorKwpMes;
    var m2 = paneles * cfg.panelM2;

    $("solar-kwp").textContent = fmtNum(kwpReal, 2) + " kWp";
    $("solar-paneles").textContent = paneles + (paneles === 1 ? " panel" : " paneles");
    $("solar-m2").textContent = "≈ " + fmtNum(Math.ceil(m2)) + " m²";
    $("solar-gen").textContent = "≈ " + fmtNum(generacion) + " kWh por mes";

    var ahorroMes = 0;
    if (monto > 0) {
      ahorroMes = monto * Math.min(1, generacion / kwh);
      $("solar-ahorro").textContent = "≈ " + window.Market.fmtMoney(Math.round(ahorroMes / 1000) * 1000);
    } else {
      $("solar-ahorro").textContent = "Ingrese el monto de su factura";
    }

    if (presupuesto > 0 && ahorroMes > 0) {
      var anios = presupuesto / (ahorroMes * 12);
      $("solar-retorno").textContent = "≈ " + fmtNum(anios, 1) + " años";
    } else {
      $("solar-retorno").textContent = "Ingrese un presupuesto y el monto de la factura";
    }

    $("solar-result").hidden = false;

    lastResult = "Calculadora solar: consumo " + fmtNum(kwh) + " kWh/mes, cubrir " +
      Math.round(cobertura * 100) + " % → " + fmtNum(kwpReal, 2) + " kWp, " + paneles +
      " paneles de " + cfg.panelW + " W, ≈ " + fmtNum(Math.ceil(m2)) + " m² de techo.";

    if (window.ToolsShared) {
      window.ToolsShared.trackToolUsed("cuanto_solar_necesito", { kwp: Math.round(kwpReal * 10) / 10 });
    }
  });

  $("solar-use-result").addEventListener("click", function () {
    var leadForm = document.querySelector("form[data-lead-form]");
    if (!window.ToolsShared || !leadForm || !lastResult) {
      return;
    }
    window.ToolsShared.prefillLeadForm(leadForm, {
      need: "solar",
      message: lastResult,
      result: lastResult,
      service: "paneles-solares"
    });
    window.ToolsShared.focusLeadForm(leadForm);
  });
})(window, document);

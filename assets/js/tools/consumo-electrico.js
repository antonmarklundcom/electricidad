/**
 * Calculadora de consumo: kWh/mes = cantidad × W × horas/día × uso × 30 ÷ 1000.
 * 'uso' is the compressor duty cycle from market_table('energia'). The price
 * per kWh is the visitor's own (bill total ÷ kWh), so no tariff goes stale here.
 */
(function (window, document) {
  "use strict";

  var form = document.getElementById("consumo-form");
  var dataEl = document.getElementById("energia-data");
  if (!form || !dataEl || !window.Market) {
    return;
  }

  var byId = {};
  JSON.parse(dataEl.textContent).equipos.forEach(function (eq) { byId[eq.id] = eq; });

  var TIPS = {
    aire: "Aires: un equipo inverter y el termostato en 24 °C bajan mucho el consumo; revise también el estado del filtro.",
    ducha: "Ducha y termocalefón: un temporizador o un termotanque solar recortan esta parte de la factura.",
    termo: "Ducha y termocalefón: un temporizador o un termotanque solar recortan esta parte de la factura.",
    heladera: "Heladera y freezer: burletes gastados y equipos de más de 10 años consumen bastante más de lo necesario.",
    freezer: "Heladera y freezer: burletes gastados y equipos de más de 10 años consumen bastante más de lo necesario.",
    bomba: "Bomba de agua: un tanque elevado bien dimensionado evita arranques continuos del motor.",
    led: "Iluminación: si todavía tiene focos incandescentes o halógenos, pasar a LED es el cambio más barato."
  };

  var $ = function (id) { return document.getElementById(id); };
  var fmtNum = function (n, d) {
    return Number(n).toLocaleString("es-PY", { minimumFractionDigits: d || 0, maximumFractionDigits: d || 0 });
  };
  var lastResult = null;

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    var filas = [];
    form.querySelectorAll(".equipo-row").forEach(function (row) {
      var qty = parseInt(row.querySelector('[data-role="qty"]').value, 10) || 0;
      var horas = parseFloat(row.querySelector('[data-role="horas"]').value) || 0;
      var w = parseFloat(row.querySelector('[data-role="w"]').value) || 0;
      var uso = parseFloat(row.getAttribute("data-uso")) || 1;
      if (qty <= 0 || horas <= 0 || w <= 0) {
        return;
      }
      var id = row.getAttribute("data-id");
      filas.push({ id: id, label: (byId[id] || {}).label || id, kwh: (qty * w * Math.min(horas, 24) * uso * 30) / 1000 });
    });

    if (!filas.length) {
      var first = form.querySelector('[data-role="qty"]');
      if (first) { first.focus(); }
      return;
    }

    var total = filas.reduce(function (s, f) { return s + f.kwh; }, 0);
    var precio = parseFloat($("consumo-precio").value) || 0;
    filas.sort(function (a, b) { return b.kwh - a.kwh; });

    $("consumo-total").textContent = "≈ " + fmtNum(total) + " kWh por mes" +
      (precio > 0 ? " · " + window.Market.fmtMoney(Math.round((total * precio) / 1000) * 1000) : "");

    var top = $("consumo-top");
    top.textContent = "";
    filas.slice(0, 3).forEach(function (f) {
      var dt = document.createElement("dt");
      dt.textContent = f.label;
      var dd = document.createElement("dd");
      dd.textContent = fmtNum(f.kwh) + " kWh/mes (" + Math.round((f.kwh / total) * 100) + " %)" +
        (precio > 0 ? " · " + window.Market.fmtMoney(Math.round((f.kwh * precio) / 1000) * 1000) : "");
      top.appendChild(dt);
      top.appendChild(dd);
    });

    var tips = $("consumo-tips");
    tips.textContent = "";
    var vistos = {};
    filas.slice(0, 3).forEach(function (f) {
      var key = f.id.replace(/[0-9]+$/, "").replace(/^bomba.*/, "bomba");
      var tip = TIPS[key];
      if (tip && !vistos[tip]) {
        vistos[tip] = true;
        var li = document.createElement("li");
        var span = document.createElement("span");
        span.textContent = tip;
        li.appendChild(span);
        tips.appendChild(li);
      }
    });

    $("consumo-result").hidden = false;

    lastResult = "Calculadora de consumo: ≈ " + fmtNum(total) + " kWh/mes. Mayores consumos: " +
      filas.slice(0, 3).map(function (f) { return f.label + " " + fmtNum(f.kwh) + " kWh"; }).join(", ") + ".";

    if (window.ToolsShared) {
      window.ToolsShared.trackToolUsed("consumo_electrico", { kwh: Math.round(total) });
    }
  });

  $("consumo-use-result").addEventListener("click", function () {
    var leadForm = document.querySelector("form[data-lead-form]");
    if (!window.ToolsShared || !leadForm || !lastResult) {
      return;
    }
    window.ToolsShared.prefillLeadForm(leadForm, {
      need: "solar",
      message: lastResult,
      result: lastResult
    });
    window.ToolsShared.focusLeadForm(leadForm);
  });
})(window, document);

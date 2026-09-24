/**
 * Analytics helper.
 *
 * track(event, params) pushes to dataLayer only when a GA4 id is configured;
 * with no id it is a silent no-op, so every phase can call it freely and
 * nothing breaks or leaks before the tags are configured.
 *
 * The id arrives from PHP as <body data-ga4="G-XXXX"> (empty until config.php
 * sets GA4_ID). Wires whatsapp_click on every wa.me link and phone_click on
 * every tel: link. Tool pages add tool_used; the lead form adds lead_submit.
 *
 * whatsapp_click carries the `service` the link is for,
 * read from the link's own data-service. Every wa.me link on the site renders
 * one — the header pill, the floating button, each WhatsApp-menu option, the
 * CTA band — so a click is attributable to the service the visitor was
 * reading about, not just to a page path.
 */
(function (window, document) {
  "use strict";

  var gaId = (document.body && document.body.dataset.ga4) || "";
  var enabled = gaId !== "";

  function track(event, params) {
    if (!enabled || !event) {
      return;
    }
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push(
      Object.assign({ event: event }, params || {})
    );
  }

  /** Where the click happened, so events are attributable per page. */
  function context(el) {
    var owner = el.closest("[data-service]");

    return {
      page_path: window.location.pathname,
      link_text: (el.textContent || "").trim().slice(0, 80),
      /* "" is a real answer: the neutral default, a page with no service of
         its own. It is not the same as the attribute being missing. */
      service: owner ? owner.getAttribute("data-service") : ""
    };
  }

  document.addEventListener(
    "click",
    function (e) {
      var link = e.target.closest && e.target.closest("a[href]");
      if (!link) {
        return;
      }
      var href = link.getAttribute("href") || "";

      if (href.indexOf("wa.me") !== -1 || href.indexOf("api.whatsapp.com") !== -1) {
        track("whatsapp_click", context(link));
      } else if (href.indexOf("tel:") === 0) {
        track("phone_click", context(link));
      }
    },
    true
  );

  /* First-touch attribution. The campaign that brought a visitor is on the
     landing URL only; by the time they submit a form two pages later it is
     gone. Store it once, for 90 days, in the cookie enviar.php already reads
     (vc_attr) — so an Ads or Facebook lead is credited to its campaign even
     when the form is on another page or another day. First touch wins: an
     existing cookie is never overwritten. */
  (function rememberFirstTouch() {
    if (/(?:^|;\s*)vc_attr=/.test(document.cookie)) {
      return;
    }
    var params = new URLSearchParams(window.location.search);
    var keys = ["utm_source", "utm_medium", "utm_campaign", "utm_term", "utm_content", "gclid", "fbclid"];
    var attr = {};
    keys.forEach(function (k) {
      var v = params.get(k);
      if (v) attr[k] = v.slice(0, 200);
    });
    var ref = document.referrer || "";
    var external = ref !== "" && ref.indexOf(window.location.host) === -1;
    if (!Object.keys(attr).length && !external) {
      return;
    }
    if (external) attr.referrer = ref.slice(0, 300);
    attr.landing = window.location.pathname;
    document.cookie = "vc_attr=" + encodeURIComponent(JSON.stringify(attr)) +
      "; max-age=" + 60 * 60 * 24 * 90 + "; path=/; SameSite=Lax" +
      (window.location.protocol === "https:" ? "; Secure" : "");
  })();

  window.siteAnalytics = { track: track, enabled: enabled };
})(window, document);

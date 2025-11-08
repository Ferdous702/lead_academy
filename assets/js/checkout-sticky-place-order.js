jQuery(function ($) {
  var $bar = $("#la-sticky-orderbar");
  if (!$bar.length) return;
  var paymentInView = false;
  var billingTop = null;

  function getTargetEl() {
    // Prefer the payment title heading; fall back to WooCommerce payment wrapper or button
    var $title = $(".la-checkout-addtion-payment-title");
    if ($title.length) return $title;
    var $payment = $("#payment");
    if ($payment.length) return $payment;
    var $btn = $("#place_order");
    if ($btn.length) return $btn;
    // Some themes rename the ID; try common selectors
    var $altBtn = $(
      '.place-order button, button[name="woocommerce_checkout_place_order"]'
    );
    if ($altBtn.length) return $altBtn.first();
    return null;
  }

  function scrollToTarget() {
    var $target = getTargetEl();
    if (!$target) return;
    var offset = $target.offset().top - 20; // small top padding
    // Smooth scroll
    $("html, body").animate({ scrollTop: offset }, 2000);
  }

  function computeBillingTop() {
    var $billing = $(".woocommerce-billing-fields__field-wrapper").first();
    if ($billing.length) {
      billingTop = $billing.offset().top;
      return;
    }
    var $customer = $("#customer_details");
    billingTop = $customer.length ? $customer.offset().top : null;
  }

  function isMobileViewport() {
    return window.matchMedia("(max-width: 768px)").matches;
  }

  function passedBilling() {
    if (billingTop == null) return false;
    var scrollTop = $(window).scrollTop();
    return scrollTop >= billingTop - 50;
  }

  // Manual viewport check for the checkout place order button (fallback and on scroll)
  function isCheckoutButtonInViewport() {
    var $candidates = $(
      '#place_order, .place-order button, button[name="woocommerce_checkout_place_order"]'
    ).filter(':visible');
    if (!$candidates.length) return false;
    var inView = false;
    var winTop = $(window).scrollTop();
    var winBottom = winTop + $(window).height();
    $candidates.each(function () {
      var $el = $(this);
      var top = $el.offset().top;
      var bottom = top + $el.outerHeight();
      // Consider visible if any part of the button intersects viewport
      if (bottom > winTop && top < winBottom) {
        inView = true;
        return false; // break
      }
    });
    return inView;
  }

  function applyVisibility() {
    // Combine IntersectionObserver state with manual check to be robust
    var buttonVisible = paymentInView || isCheckoutButtonInViewport();
    var shouldShow = isMobileViewport() && passedBilling() && !buttonVisible;
    $bar.toggleClass("la-hidden", !shouldShow);
    $bar.attr("aria-hidden", shouldShow ? "false" : "true");
  }

  // Hide the sticky bar when the real Place Order area is visible
  function bindVisibilityObserver() {
    var $target = getTargetEl();
    if (!$target || !("IntersectionObserver" in window)) return;

    try {
      var observer = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            paymentInView = !!entry.isIntersecting;
            applyVisibility();
          });
        },
        { root: null, threshold: 0.01 }
      );
      observer.observe($target.get(0));
    } catch (e) {
      // No-op on older browsers
    }
  }

  // Click handler
  $(document).on("click", "#la-sticky-scroll-to-payment", function () {
    scrollToTarget();
  });

  // Scroll/resize handlers
  $(window).on("scroll resize", function () {
    applyVisibility();
  });

  // Rebind on checkout updates since DOM can change
  $(document.body).on("updated_checkout", function () {
    computeBillingTop();
    bindVisibilityObserver();
    applyVisibility();
  });

  // Initial bind
  computeBillingTop();
  bindVisibilityObserver();
  applyVisibility();
});

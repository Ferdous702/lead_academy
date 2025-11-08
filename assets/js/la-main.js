jQuery(document).ready(function () {
  if (jQuery("#phuk-top-3-sec").length) {
    let i = Number(jQuery("#phuk-top-3-sec").width());
    console.log("displayWidth = " + i);
    if (i < 1041) {
      var e = jQuery("#phuk-top-3-sec div.phlebotomy-container").children();
      e.hide();
      e.first().show();
      var o = 0;
      function t() {
        if (o == 4) {
          o = 1;
        } else {
          o++;
        }
        e.hide();
        jQuery(
          "#phuk-top-3-sec .phlebotomy-container > div:nth-child(" + o + ")"
        ).show();
        console.log("Serial = " + o);
      }
      setInterval(t, "5000");
    }
  }

  if (jQuery("div.open-content > div.plus").length) {
    jQuery("div.open-content > div.plus").click(function () {
      jQuery(this).children().toggleClass("fa-plus");
      jQuery(this).children().toggleClass("fa-minus");
      jQuery(this)
        .parent()
        .parent()
        .children(":nth-child(2)")
        .toggleClass("hidden-content");
    });
  }

  /**
   * ====================================================================
   * Add smooth scrolling to all links
   * ====================================================================
   */
  // jQuery("#woocommerce_product_categories-2 .product-categories").prepend('<li class="cat-item all-course-cat"><a href="https://beta.lead-academy.org/all-courses/">All Courses</a></li>');

  jQuery("#la-course-enrol-now").click(function () {
    console.log(jQuery("#exam-board").offset().top);
    jQuery("html, body").animate(
      {
        scrollTop: 500,
      },
      200
    );
  });

  // jQuery(".hide-option").css({
  //     "display": "none"
  // });
  /*
    jQuery('body').on('click', '#display_all_variation', function(e) {
        console.log('Clicked on display_all_variation');
        jQuery(".hide-option").css({
            "display": "block"
        });
        jQuery(this).hide();
        jQuery("#hide_some_variation").show();
    });
    
    jQuery('body').on('click', '#hide_some_variation', function(e) {
        console.log('Clicked on hide_some_variation');
        jQuery(".hide-option").css({
            "display": "none"
        });
        jQuery(this).hide();
        jQuery("#display_all_variation").show();
    });
*/

  //Load More Single Courses

  jQuery("body").on("click", "#display_all_variation", function (e) {
    console.log("Buuton clicked");
    var item = parseInt(jQuery(this).attr("data-item"));
    var max = parseInt(jQuery(this).attr("data-max"));
    if (item >= max) {
      jQuery("#display_all_variation").text("No More Dates");
    } else {
      jQuery("#display_all_variation").attr("data-item", item + 5);
      jQuery(
        "#show-classroom-schedule-wrap > div:nth-child(" + (item + 1) + ")"
      ).show();
      jQuery(
        "#show-classroom-schedule-wrap > div:nth-child(" + (item + 2) + ")"
      ).show();
      jQuery(
        "#show-classroom-schedule-wrap > div:nth-child(" + (item + 3) + ")"
      ).show();
      jQuery(
        "#show-classroom-schedule-wrap > div:nth-child(" + (item + 4) + ")"
      ).show();
      jQuery(
        "#show-classroom-schedule-wrap > div:nth-child(" + (item + 5) + ")"
      ).show();
    }
    jQuery("#hide_some_variation").show();
  });

  jQuery("body").on("click", "#hide_some_variation", function () {
    jQuery("#show-classroom-schedule-wrap > div").hide();
    jQuery("#show-classroom-schedule-wrap > div:nth-child(1)").show();
    jQuery("#show-classroom-schedule-wrap > div:nth-child(2)").show();
    jQuery("#show-classroom-schedule-wrap > div:nth-child(3)").show();
    jQuery("#show-classroom-schedule-wrap > div:nth-child(4)").show();
    jQuery("#show-classroom-schedule-wrap > div:nth-child(5)").show();
    jQuery("#show-classroom-schedule-wrap > div:nth-child(6)").show();
    jQuery("#show-classroom-schedule-wrap > div:nth-child(7)").show();

    jQuery("#hide_some_variation").hide();
  });

  /**
   * ====================================================================
   * Single Course Page Accordion
   * ====================================================================
   */
  if (jQuery("#la-faq-accordion").length) {
    jQuery("#la-faq-accordion .mcdt-toggle").click(function (e) {
      e.preventDefault();
      let $this = jQuery(this);
      $this.next().slideToggle(250);

      if ($this.hasClass("mcdt-toggle-show")) {
        $this.removeClass("mcdt-toggle-show");
      } else {
        $this.addClass("mcdt-toggle-show");
      }
    });
  }

  /**
   * ====================================================================
   * Single Course Sticky Menu
   * ====================================================================
   */
  jQuery(window).scroll(function () {
    let $height_from_top = jQuery(window).scrollTop();
    let $parent_of_sticky_tag = jQuery("#la-single-links");
    let $sticky_tag = jQuery("#la-single-links ul");

    if ($parent_of_sticky_tag.length) {
      let $element_offset_top = $parent_of_sticky_tag.offset().top;
      let $container_width = $parent_of_sticky_tag.innerWidth();

      if ($height_from_top > $element_offset_top) {
        $sticky_tag.addClass("sticky");
        $sticky_tag.css("width", $container_width);
      } else {
        $sticky_tag.removeClass("sticky");
      }
    }
  });

  /**
   * ====================================================================
   * Mobile Course Menu Dropdown Click
   * ====================================================================
   */
  jQuery("#mobile-course-menu-dropdown-btn").on("click", function (event) {
    jQuery("#mobile-course-menu").toggleClass("show");
  });

  /**
   * ====================================================================
   * Exam Board Sidebar Button Click
   * ====================================================================
   */
  jQuery("#exam-board-btns button").on("click", function (event) {
    jQuery("#exam-board-btns button").removeClass("active");
    jQuery(this).addClass("active");
  });

  /**
   * ====================================================================
   * Checkbox operation
   * ====================================================================
   */

  jQuery("select#input_37_7").on("change", function () {
    console.log(
      jQuery("form#gform_37 fieldset.la-conditioned-checkboxes:block")
    );
  });

  /**
   * ====================================================================
   * Course Categories Menu
   * ====================================================================
   */
  var duplicatedCategoryItems = [
    "All Courses",
    "Functional Skills",
    "Education & Training",
    "Counselling & Psychology",
    "Massage Therapy",
    "Leadership & Management",
    "Free Courses",
    "Others",
    "Uncategorized",
  ];

  if (jQuery("ul.children").length) {
    jQuery("ul.children")
      .parent()
      .append(
        '<span class="open-submenu-btn"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>'
      );

    jQuery(".open-submenu-btn").click(function () {
      jQuery(this).parent().children("ul.children").slideToggle("fast");
    });
  }
  jQuery(".courses-btn").on("click", function (event) {
    let headerElWidth = jQuery("#header").width();
    if (headerElWidth > 1100) {
      jQuery(".la-all-courses-mega-menu-wrap").toggleClass("show");
    } else {
      jQuery(".la-popular-course-sml-devices").toggleClass("show");
    }
    let hasChildItems = jQuery(this)
      .siblings(".la-all-courses-mega-menu-wrap")
      .find(".product-categories")
      .find("li")
      .siblings(".cat-item");
    // console.log(hasChildItems.text());

    hasChildItems.each(function () {
      for ($i = 0; $i < duplicatedCategoryItems.length; $i++) {
        if (jQuery(this).text().includes(duplicatedCategoryItems[$i])) {
          jQuery(this).remove();
        }
      }
    });

    hasChildItems.find(".open-submenu-btn").remove();
    hasChildItems.find(".children").remove();
  });

  // Popular courses toggle
  jQuery("a.more-categories").on("click", function (event) {
    jQuery(".la-all-courses-mega-menu-wrap").toggleClass("show");
  });

  // Hot deals toggle
  jQuery("a.hot-deal-btn").on("click", function (e) {
    e.preventDefault();
    jQuery(this).parent().siblings(".la-hot-deals-submenu").toggleClass("show");
    jQuery(this).siblings(".la-hot-deals-submenu").toggleClass("show");
  });

  // Login Submenu toggle class
  jQuery("a.loggedin-user-btn").on("click", function (e) {
    e.preventDefault();
    jQuery(this).siblings(".loggedin-user-submenu").toggleClass("show");
  });

  /**
   * ====================================================================
   * Hiding the Billing State field from Checkout page
   * ====================================================================
   */

  jQuery("body.woocommerce-checkout input#billing-state").parent().hide();

  /**
   * ====================================================================
   * Add smooth scrolling to all links
   * ====================================================================
   */
  // jQuery("a").on('click', function (event) {

  //     // Make sure this.hash has a value before overriding default behavior
  //     if (this.hash !== "") {
  //         // Prevent default anchor click behavior
  //         event.preventDefault();

  //         // Store hash
  //         var hash = this.hash;

  //         // Using jQuery's animate() method to add smooth page scroll
  //         // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
  //         jQuery('html, body').animate({
  //             scrollTop: jQuery(hash).offset().top
  //         }, 800, function () {

  //             // Add hash (#) to URL when done scrolling (default click behavior)
  //             window.location.hash = hash;
  //         });
  //     } // End if
  // });
});

/**
 * ====================================================================
 * Review part
 * ====================================================================
 */

// Owl carousel
if (jQuery(".la-google-review-carousel-section .owl-2").length > 0) {
  jQuery(".la-google-review-carousel-section .owl-2").owlCarousel({
    center: false,
    items: 1,
    loop: true,
    // stagePadding: 0,
    margin: 20,
    smartSpeed: 1000,
    // autoplay: true,
    nav: true,
    dots: true,
    pauseOnHover: false,
    responsive: {
      480: {
        items: 1,
      },
      1000: {
        stagePadding: 0,
        items: 2,
      },
      1240: {
        stagePadding: 0,
        items: 3,
      },
    },
  });
}

document.addEventListener("DOMContentLoaded", () => {
  const laGoogleReview = document.querySelector(".la-google-review");
  const popup = document.getElementById("popup");
  const closePopupBtn = document.getElementById("closePopupBtn");

  // Check if the element exists before adding an event listener
  if (laGoogleReview) {
    laGoogleReview.addEventListener("click", () => {
      if (popup) {
        popup.style.display = "flex";
      }
    });
  }

  if (closePopupBtn) {
    closePopupBtn.addEventListener("click", () => {
      if (popup) {
        popup.style.display = "none";
      }
    });
  }

  if (popup) {
    window.addEventListener("click", (event) => {
      if (event.target === popup) {
        popup.style.display = "none";
      }
    });
  }
});

// message therapy landing page button

jQuery(document).ready(function () {
  var isLandingPage = window.location.pathname === "/massage-therapy-courses";

  if (!isLandingPage) {
    localStorage.setItem("lastPath", window.location.pathname);
  } else {
    var lastPath = localStorage.getItem("lastPath");
    if (lastPath) {
      console.log("Last URL: " + lastPath);
      var coursePaths = [
        "/course/lymphatic-drainage-massage-training-birmingham",
        "/course/swedish-massage-training-birmingham",
        "/course/deep-tissue-massage-training-birmingham",
        "/course/swedish-massage-training-london",
      ];

      if (coursePaths.includes(lastPath)) {
        jQuery("#f2f-courses").addClass("active");
        jQuery("#online-courses").removeClass("active");
        jQuery(".f2f-courses").css("display", "block");
        jQuery(".online-courses").css("display", "none");
      } else {
        jQuery("#online-courses").addClass("active");
        jQuery("#f2f-courses").removeClass("active");
        jQuery(".online-courses").css("display", "block");
        jQuery(".f2f-courses").css("display", "none");
      }
    }
  }
});

/* Content Single Product Start */

/* Content Single Product Start */

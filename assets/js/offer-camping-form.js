document.addEventListener("DOMContentLoaded", function () {
  // Check if the popup has already been shown this session
  if (!localStorage.getItem("popupShown")) {
    // Set a timer to display the popup after 5 seconds
    setTimeout(function () {
      var popup = document.getElementById("unique-flash-sale-popup");
      if (popup) {
        popup.style.display = "flex";
      }
      // Mark that the popup has been shown
      localStorage.setItem("popupShown", "true");
    }, 5000); // Show after 5 seconds
  }

  // Close popup when the close button is clicked
  var closeButton = document.getElementById("unique-popup-close");
  var popupContainer = document.getElementById("unique-flash-sale-popup");
  if (closeButton && popupContainer) {
    closeButton.onclick = function () {
      popupContainer.style.display = "none";
    };
  }

  // Countdown timer
  var countdownElement = document.getElementById("unique-countdown");
  if (countdownElement) {
    var countdownDate = new Date().getTime() + 24 * 60 * 60 * 1000; // 24 hours from now

    var x = setInterval(function () {
      var now = new Date().getTime();
      var distance = countdownDate - now;

      var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      countdownElement.innerHTML =
        hours + "h " + minutes + "m " + seconds + "s ";

      if (distance < 0) {
        clearInterval(x);
        countdownElement.innerHTML = "EXPIRED";
      }
    }, 1000);
  }
});

function copyCoupon(couponWrapper) {
  // Find the coupon code text and the feedback element within the wrapper
  var couponCode = couponWrapper
    .querySelector(".coupon-text")
    .textContent.trim();
  var confirmationMessage =
    couponWrapper.parentElement.querySelector(".pro-copy-feedback");

  // Using only the modern and secure Clipboard API
  if (navigator.clipboard && window.isSecureContext) {
    navigator.clipboard
      .writeText(couponCode)
      .then(function () {
        if (confirmationMessage) {
          confirmationMessage.style.display = "block";
          setTimeout(function () {
            confirmationMessage.style.display = "none";
          }, 2000);
        }
      })
      .catch(function (err) {
        console.error("Clipboard API failed: ", err);
        alert("Sorry, the coupon could not be copied automatically.");
      });
  } else {
    // If Clipboard API is not supported
    alert(
      "Automatic copy is not supported on non-secure pages. Please copy the code manually."
    );
  }
}

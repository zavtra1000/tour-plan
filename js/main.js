var hotelSwiper = new Swiper(".hotel-slider", {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".hotel-slider__button--next",
    prevEl: ".hotel-slider__button--prev",
  },
});

var hotelSwiper = new Swiper(".hotel-slider", {
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});

var reviewsSlider = new Swiper(".reviews-slider", {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".reviews-slider__button--next",
    prevEl: ".reviews-slider__button--prev",
  },
});

var reviewsSlider = new Swiper(".reviews-slider", {
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});

$(".newletter").parallax({ imageSrc: "../img/newletter.jpg" });

var menuButton = document.querySelector(".menu-button");
menuButton.addEventListener("click", function () {
  document
    .querySelector(".navbar-botton")
    .classList.toggle("navbar-botton--visible");
});

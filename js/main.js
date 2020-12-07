$(document).ready(function () {
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

var menuButton = $(".menu-button");
menuButton.on("click", function () {
  $(".navbar-botton").toggleClass("navbar-botton--visible");
});



var modalButton = $('[data-toggle=modal]');
var closeModalButton = $(".modal__close");
modalButton.on('click', openModal);
closeModalButton.on('click', closeModal);

function openModal () {
  const targetModal = $(this).attr('data-href');
  $(targetModal).find('.modal__overlay').addClass('modal__overlay--visible');
  $(targetModal).find('.modal__dialog').addClass('modal__dialog--visible');

}

function closeModal (event) {
  event.preventDefault(); 
  const modalOverlay = $('.modal__overlay');
  const modalDialog = $('.modal__dialog');
  modalOverlay.removeClass('modal__overlay--visible');
  modalDialog.removeClass('modal__dialog--visible');

}

$(document).keyup(function (e) {
  if (e.keyCode == 27) {
    var modalOverlay = $(".modal__overlay");
    var modalDialog = $(".modal__dialog");
    modalOverlay.removeClass("modal__overlay--visible");
    modalDialog.removeClass("modal__dialog--visible");
  }
});

// Обработка форм

$(".form").each(function () {
  $(this).validate({
    errorClass: "invaild",
    messages: {
      name: {
        required: "Укажите имя",
        minlength: "Имя должно содержать не менее 2 симоволов или букв  ",
      },
      email: {
        required: "We need your email address to contact you",
        email: "Your email address must be in the format of name@domain.com",
      },
      phone: {
        required: "Телефон обязателен",
      },
    },
  });
});
});
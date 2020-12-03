<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TOUR-PLAN</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header class="navbar navbar--mobile--fixed">
      <div class="container">
        <div class="navbar-top">
          <a href="index.php" class="logo">
            <img
              src="img/logo.svg"
              alt="logo: Best tour plan"
              class="logo__image"
            />
          </a>

          <form
            action="#"
            class="search navbar__search navbar__search--mobile--hidden"
          >
            <input
              type="text"
              class="search__input"
              placeholder="Search Location"
            />
            <button class="search__button">
              <img src="img/search.svg" alt="icon: search" />
            </button>
          </form>

          <a href="#" class="user navbar__user navbar__user--mobile--hidden">
            <img
              src="img/user-avatar.jpg"
              alt="avatar: natan"
              class="user__avatar"
            />
            <span class="user__name">Natan</span>
          </a>
          <button class="menu-button navbar-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
        </div>
        <!-- /.navbar-top -->
      </div>
      <!-- /.container -->

      <!-- <nav class="nav-navbar-menu"> -->

      <!-- </nav> -->
      <!-- header-nav -->
      <div class="navbar-botton">
        <div class="container">
          <ul class="navbar-menu">
            <li class="navbar-menu__item navbar-menu__item--mobile--visible">
              <a href="#" class="user navbar__user navbar__user--mobile--visible">
                <img
                  src="img/user-avatar.jpg"
                  alt="avatar: natan"
                  class="user__avatar"
                />
                <span class="user__name user__name--light ">Natan</span>
              </a>
            </li>
            <li class="navbar-menu__item navbar-menu__item--mobile--visible">
                        <form
            action="#"
            class="search navbar__search navbar__search--mobile--visible"
          >
            <input
              type="text"
              class="search__input"
              placeholder="Search Location"
            />
            <button class="search__button">
              <img src="img/search.svg" alt="icon: search" />
            </button>
          </form>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">All Deals</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotels</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Activities</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Restaurants</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Events</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Rodrigues</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /.navbar-botton -->
      <!-- /.container -->
    </header>

    <nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Flash Offers</a>
          </li>
          <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
        </ul>
      </div>
    </nav>
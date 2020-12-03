<?php include('header.php')?>
    <!-- /.breadcrumb -->
    <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrapper">
              <div class="stars">
                <img src="img/Star.svg" alt="star" />
                <img src="img/Star.svg" alt="star" />
                <img src="img/Star.svg" alt="star" />
                <img src="img/Star.svg" alt="star" />
                <img src="img/Star.svg" alt="star" />
              </div>
              <h1 class="hotel-name hotel-info__name">GRAND HILTON HOTEL</h1>
              <span class="offer hotel-info__offer">Flash Offer</span>
            </div>
            <p class="hotel-description hotel-info__description">
              Half-Board/ All Inclusive + Complimentary Activities + Child Stays
              Free
            </p>
          </div>
          <!-- /.hotel-info__text -->
          <div class="rating hotel-info__rating">
            <span class="rating__text">User Rattings</span>
            <span class="rating__counter">4.5/5</span>
          </div>
          <!-- /.hotel-info__rating -->
        </div>
        <!-- hotel-info -->
        <div class="hotel-grid">
          <!-- Slider main container -->
          <div class="swiper-container hotel-slider hotel__slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide hotel-slider__item">
                <img
                  class="hotel-slider__image"
                  src="img/slide.jpg"
                  alt="slide"
                />
              </div>
              <div class="swiper-slide hotel-slider__item">
                <img
                  class="hotel-slider__image"
                  src="img/slide.jpg"
                  alt="slide"
                />
              </div>
              <div class="swiper-slide hotel-slider__item">
                <img
                  class="hotel-slider__image"
                  src="img/slide.jpg"
                  alt="slide"
                />
              </div>
            </div>

            <!-- If we need navigation buttons -->
            <button
              class="hotel-slider__button hotel-slider__button--prev"
            ></button>
            <button
              class="hotel-slider__button hotel-slider__button--next"
            ></button>
          </div>
          <!-- /swiper-container -->

          <div class="hotel-right">
            <div class="booking">
              <div class="booking__info">
                <div class="booking__price">
                  <span class="booking__start">price starts as</span>
                  <strong class="booking__pricetag">$ 8,500</strong>
                  <span class="booking__per-room">per room / night</span>
                </div>
                <!-- /booking__price -->
                <div class="booking__room">
                  <div class="booking__text">
                    <img
                      src="img/user.svg"
                      alt="icon: user"
                      class="booking__icon"
                    />
                    <span class="booking__description">2 x Guests</span>
                  </div>
                  <div class="booking__text">
                    <img
                      src="img/home.svg"
                      alt="icon: home"
                      class="booking__icon"
                    />
                    <span class="booking__description">1 x Room</span>
                  </div>
                </div>
                <!-- /.booking__room -->
              </div>
              <!-- /.booking__info -->
              <div class="booking__call-center">
                <span class="booking__heading">Quick Booking</span>
                <a class="booking__number" href="tel:12100"></a>
                <img src="img/phone-call.svg" alt="icon: phone" />
                <span class="booking__num">12100</span>
              </div>
              <!-- /.booking__call-center -->
              <button class="button booking__button">View Other Options</button>
            </div>
            <!-- /.booking -->
            <div class="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5414446132395!2d98.29703101427103!3d7.838257708658176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305025650c33dbab%3A0xa67a542329d011e1!2z0J_RhdGD0LrQtdGCLCDQmtCw0YDQvtC9LCDQntGC0LXQu9GMINCl0LjQu9GC0L7QvQ!5e0!3m2!1sru!2sru!4v1606249068460!5m2!1sru!2sru"
                width="100%"
                height="213"
                frameborder="0"
                style="border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe>
            </div>
            <!-- /.map -->
          </div>
        </div>
        <!-- /.hotel-grid -->
      </div>
      <!-- /.container -->
    </section>

    <section class="newletter">
      <div class="newletter-wrapper">
        <h2 class="newletter-title newletter__title">
          subscribe to our
          <span class="newletter-title_strong">Newsletter</span>
        </h2>
        <form action="#" class="subsribe newletter__subsribe">
          <input
            type="text"
            class="subsribe__input"
            placeholder="Your email address"
          />
          <button class="subsribe__button">Send</button>
        </form>
      </div>
      <!-- /.newletter-wrapper -->
    </section>
    <!-- /.newletter -->

    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title">What people think about us</h2>
        <div class="swiper-container reviews-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="img/avatar.jpg"
                    alt="photo: Megan Fox"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__username">Megan Fox</h3>
                  <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                  <div class="reviews-slider__rating">
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                  </div>
                  <!-- /.reviews-slider__rating -->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was
                  good and polite. They welcome us very well. Issue was only
                  that Lift was not in working and we were allotted to 3rd floor
                  and amenities articles were in corner of gallery which were
                  giving bad feeling. Breakfast was good and support of the
                  staff was also very nice. Location is not good as per
                  atmosphere, it is very nearby most of the popular places but
                  self location in a narrow street is not good. Overall it was a
                  good experience and could recommend.
                </p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /swiper-slider -->
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="img/avatar.jpg"
                    alt="photo: Megan Fox"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__username">Megan Fox</h3>
                  <span class="reviews-slider__date">Stayed 20 Dec, 2019</span>
                  <div class="reviews-slider__rating">
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                  </div>
                  <!-- /.reviews-slider__rating -->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was
                  good and polite. They welcome us very well. Issue was only
                  that Lift was not in working and we were allotted to 3rd floor
                  and amenities articles were in corner of gallery which were
                  giving bad feeling. Breakfast was good and support of the
                  staff was also very nice. Location is not good as per
                  atmosphere, it is very nearby most of the popular places but
                  self location in a narrow street is not good. Overall it was a
                  good experience and could recommend.
                </p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /swiper-slider -->
          </div>
          <!-- /swiper-wrapper -->
          <!-- If we need navigation buttons -->
          <button
            class="reviews-slider__button reviews-slider__button--prev"
          ></button>
          <button
            class="reviews-slider__button reviews-slider__button--next"
          ></button>
        </div>
        <!-- /swiper-container reviews-slider -->
      </div>
      <!-- /.container -->
    </section>

    <section class="activities">
      <div class="container">
        <h2 class="activities__title">Other Activities</h2>
        <div class="activities-wrapper">
          <div class="card activities">
            <img
              src="img/activity-1.jpg"
              alt="The curious corner of chamarel"
              class="card__image"
            />
            <h3 class="card__title">The curious corner of chamarel</h3>
            <button class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
          <div class="card activities">
            <img
              src="img/activity-2.jpg"
              alt="Gymkhana club golf course"
              class="card__image"
            />
            <h3 class="card__title">Gymkhana club golf course</h3>
            <button class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
          <div class="card activities">
            <img
              src="img/activity-3.jpg"
              alt="Tamarind falls hiking trip - full day "
              class="card__image"
            />
            <h3 class="card__title">Tamarind falls hiking trip - full day</h3>
            <button class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
          <div class="card activities">
            <img
              src="img/activity-4.jpg"
              alt="The blue marine discovery quest"
              class="card__image"
            />
            <h3 class="card__title">The blue marine discovery quest</h3>
            <button class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.activities-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.activities -->

 <?php include('footer.php')?>

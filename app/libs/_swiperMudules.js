import { Swiper, Navigation, Pagination, Lazy } from 'swiper';
Swiper.use([Navigation, Pagination, Lazy])

// Слайдер команды
export function swiperMudules() {
  const sliderTeam = new Swiper('.team__body', {
    pagination: {
      el: ".team__nav",
    },
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,
    lazy: true,
  });

  // Слайдер отзывов с сайта
  const sliderSiteRev = new Swiper('.site-rev__body', {
    pagination: {
      el: ".site-rev__nav",
      clickable: true,
    },
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    lazy: true,
    breakpoints: {
      520: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      920: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });

  // Слайдер отзывов с соц сетей
  const sliderSocRev = new Swiper('.soc-rev__body', {
    pagination: {
      el: ".soc-rev__nav",
      clickable: true,
    },
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    lazy: true,
    breakpoints: {
      480: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      520: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      920: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });

  // Слайдер отзывов с соц сетей
  const blogSlider = new Swiper('.blog-slider__body', {
    pagination: {
      el: ".blog-slider__nav",
      clickable: true,
    },
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    lazy: true,
    breakpoints: {
      480: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      520: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      920: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });
}
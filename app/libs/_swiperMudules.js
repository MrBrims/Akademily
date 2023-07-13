import { Swiper, Navigation, Pagination, Lazy } from 'swiper';
Swiper.use([Navigation, Pagination, Lazy])

export function swiperMudules() {
  const slider = new Swiper('.team__body', {
    pagination: {
      el: ".team__nav",
    },
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,
    lazy: true,
  });
}
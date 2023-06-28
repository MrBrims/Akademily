export function burgerMenu() {

  // Добавление класса для тех пунктов меню в которых есть суб-меню
  const topMenuItems = document.querySelectorAll('.top-menu__items');

  topMenuItems.forEach(item => {
    const subMenu = item.querySelector('.sub-menu');
    if (subMenu) {
      item.classList.add('--sub');
    }
  });

  // Добавление класса при прокрутке
  window.addEventListener('scroll', function () {
    const header = document.querySelector('header');
    if (window.scrollY > 20) {
      header.classList.add('--scrolled');
    } else {
      header.classList.remove('--scrolled');
    }
  });

  // Добавление класса при клике по кнопке в шапке
  const headerBtnWrapper = document.querySelector('.header__btn-wrappper');

  headerBtnWrapper.addEventListener('click', () => {
    headerBtnWrapper.classList.toggle('--active');
    document.querySelector('.menu-box ').classList.toggle('--active');
  });

  // Добавление класса при клике по пункту меню
  const menuItems = document.querySelectorAll('.top-menu__items');

  menuItems.forEach(item => {
    item.addEventListener('click', () => {
      item.classList.toggle('--active');
    });
  });

  // Добавление атрибута с текстом ссылки
  const links = document.querySelectorAll('.top-menu > li > a');
  links.forEach(link => {
    link.setAttribute('data-content', link.textContent);
  });
































  // const menuBtn = document.querySelector('.menu__btn');
  // const menuBody = document.querySelector('.menu__body');

  // if (menuBtn) {
  //   menuBtn.addEventListener("click", function (e) {
  //     menuBody.classList.toggle('--active');
  //     menuBtn.classList.toggle('--active');
  //   });
  //   menuBody.addEventListener("click", function (e) {
  //     menuBody.classList.remove('--active');
  //     menuBtn.classList.remove('--active');
  //   });
  // }

  // const menuLinks = document.querySelectorAll('.menu__link[data-goto]');
  // if (menuLinks.length > 0) {
  //   menuLinks.forEach(menuLink => {
  //     menuLink.addEventListener("click", onMenuLinkClick);
  //   });

  //   function onMenuLinkClick(e) {
  //     const menuLink = e.target;
  //     if (menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)) {
  //       const gotoBlock = document.querySelector(menuLink.dataset.goto);
  //       const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset - document.querySelector('header').offsetHeight;

  //       if (menuBtn.classList.contains('--active')) {
  //         menuBody.classList.remove('--active');
  //         menuBtn.classList.remove('--active');
  //       }

  //       window.scrollTo({
  //         top: gotoBlockValue,
  //         behavior: "smooth"
  //       });
  //       e.preventDefault();
  //     }
  //   }
  // }
}
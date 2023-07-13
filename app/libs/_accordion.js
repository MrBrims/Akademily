export function accordion() {
  const accordionItems = document.querySelectorAll('.accordion__item');

  // Открываем первый элемент аккордеона
  accordionItems[0].classList.add('--active');

  accordionItems.forEach(item => {
    item.addEventListener('click', () => {
      // Добавляем класс "active" к выбранному элементу
      item.classList.add('--active');
      // Удаляем класс "active" у остальных элементов
      accordionItems.forEach(otherItem => {
        if (otherItem !== item) {
          otherItem.classList.remove('--active');
        }
      });
    });
  });
}
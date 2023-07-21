export function tabs() {

  // Табы прайса
  const tabPriceItems = Array.from(document.querySelectorAll('.tab-price__nav'))
  const tabPriceContent = Array.from(document.querySelectorAll('.tab-price__content'))

  if (tabPriceItems.length > 0 && tabPriceContent.length > 0) {
    tabPriceItems[0].classList.add('--active-tab');
    tabPriceContent[0].classList.add('--active-tab');

    const tabPriceClearClass = (element, className = '--active-tab') => {
      element.find(item => item.classList.remove(`${className}`))
    }

    const tabPriceSetClass = (element, index, className = '--active-tab') => {
      element[index].classList.add(`${className}`)
    }

    const tabPriceCheckout = (item, index) => {
      item.addEventListener('click', () => {

        if (item.classList.contains('--active-tab')) return

        tabPriceClearClass(tabPriceItems)
        tabPriceClearClass(tabPriceContent)

        tabPriceSetClass(tabPriceItems, index)
        tabPriceSetClass(tabPriceContent, index)
      })
    }

    tabPriceItems.forEach(tabPriceCheckout)
  }


  //Табы отзывов
  const tabRevItems = Array.from(document.querySelectorAll('.reviews-tab__nav'))
  const tabRevContent = Array.from(document.querySelectorAll('.reviews-tab__content'))

  if (tabRevItems.length > 0 && tabRevContent.length > 0) {
    tabRevItems[0].classList.add('--active-tab');
    tabRevContent[0].classList.add('--active-tab');

    const tabRevClearClass = (element, className = '--active-tab') => {
      element.find(item => item.classList.remove(`${className}`))
    }

    const tabRevSetClass = (element, index, className = '--active-tab') => {
      element[index].classList.add(`${className}`)
    }

    const tabRevCheckout = (item, index) => {
      item.addEventListener('click', () => {

        if (item.classList.contains('--active-tab')) return

        tabRevClearClass(tabRevItems)
        tabRevClearClass(tabRevContent)

        tabRevSetClass(tabRevItems, index)
        tabRevSetClass(tabRevContent, index)
      })
    }

    tabRevItems.forEach(tabRevCheckout)
  }
}
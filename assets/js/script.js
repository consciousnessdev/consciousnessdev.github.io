function scrollIt (element) {
  window.scrollTo({
    'behavior': 'smooth',
    'left': 0,
    'top': element.offsetTop - parseInt(100)
  })
}

const expertise = document.querySelector('.content-section__top')

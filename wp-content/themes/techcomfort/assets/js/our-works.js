document.addEventListener("DOMContentLoaded", function () {
  const ourWorks = document.querySelector('.our-works');
  ourWorks.style.opacity = 1;

  // zoom on click
  const image = document.getElementsByClassName('gallery-image');
  const item = document.getElementsByClassName('gallery-item');
  const close = document.getElementsByClassName('gallery-close');
  const prevBtn = document.getElementsByClassName('prev-js');
  const nextBtn = document.getElementsByClassName('next-js');


  // open image
  for (let i = 0; i < image.length; i++) {
    image[i].addEventListener('click', function () {
      this.parentElement.classList.add('fixed');
      isVisibleActions(i);
    });
  }

  // close image
  for (let i = 0; i < close.length; i++) {
    close[i].addEventListener('click', function () {
      this.parentElement.classList.remove('fixed');
    });
  }

  const isVisibleActions = (slide, button) => {
    if (slide === 0) {
      prevBtn.classList.add('d-none');
    } else {
      prevBtn.classList.remove('d-none');
    }
  }
  const activeSlide = (button, type) => {
    let currentSlide = 0;
    for (let i = 0; i < item.length; i++) {
      if (item[i].classList.contains('fixed')) {
        currentSlide = i;
      }
    }
    item[currentSlide].classList.remove('fixed');

    if (type === 'prev') {
      item[currentSlide - 1].classList.add('fixed');
    }
    if (type === 'next') {
      item[currentSlide + 1].classList.add('fixed');
    }
  }

  // prev image
  for (let i = 0; i < prevBtn.length; i++) {
    prevBtn[i].addEventListener('click', function () {
      activeSlide(prevBtn[i], 'prev');
    });
  }

  // next image
  for (let i = 0; i < nextBtn.length; i++) {
    nextBtn[i].addEventListener('click', function () {
      activeSlide(nextBtn[i], 'next');
    });
  }

});
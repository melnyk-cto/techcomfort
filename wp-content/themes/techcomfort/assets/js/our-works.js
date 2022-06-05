document.addEventListener("DOMContentLoaded", function () {
  const ourWorks = document.querySelector('.our-works');
  ourWorks.style.opacity = 1;

  // zoom on click
  const image = document.getElementsByClassName('gallery-image');
  const item = document.getElementsByClassName('gallery-item');
  const close = document.getElementsByClassName('gallery-close');
  const prevBtn = document.getElementsByClassName('prev-js');
  const nextBtn = document.getElementsByClassName('next-js');

  const isVisibleActions = (active) => {
    if (active === 0) {
      prevBtn[active].classList.add('d-none');
    } else {
      prevBtn[active].classList.remove('d-none');
    }
    if (active >= item.length - 1) {
      nextBtn[active].classList.add('d-none');
    } else {
      nextBtn[active].classList.remove('d-none');
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


  // prev image
  for (let i = 0; i < prevBtn.length; i++) {
    prevBtn[i].addEventListener('click', function () {
      activeSlide(prevBtn[i], 'prev');
      isVisibleActions(i - 1);
    });
  }

  // next image
  for (let i = 0; i < nextBtn.length; i++) {
    nextBtn[i].addEventListener('click', function () {
      activeSlide(nextBtn[i], 'next');
      isVisibleActions(i + 1);
    });
  }

});
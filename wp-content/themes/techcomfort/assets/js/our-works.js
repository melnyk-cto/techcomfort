document.addEventListener("DOMContentLoaded", function () {
    const ourWorks = document.querySelector('.our-works');
    ourWorks.style.opacity = 1;

    // zoom on click
    const image = document.getElementsByClassName('gallery-image');
    const close = document.getElementsByClassName('gallery-close');
    for (let i = 0; i < image.length; i++) {
        image[i].addEventListener('click', function () {
            this.parentElement.classList.add('fixed')
        });
    }

    for (let i = 0; i < close.length; i++) {
        close[i].addEventListener('click', function () {
             this.parentElement.classList.remove('fixed')
        });
    }
});
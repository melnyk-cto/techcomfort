document.addEventListener("DOMContentLoaded", function () {
    const ourWorks = document.querySelector('.our-works');
    ourWorks.style.opacity = 1;

    // zoom on click
    const gallery = document.getElementsByClassName('gallery-item');
    for (let i = 0; i < gallery.length; i++) {
        gallery[i].addEventListener('click', function () {
            this.classList.add('fixed')
        });
    }
});
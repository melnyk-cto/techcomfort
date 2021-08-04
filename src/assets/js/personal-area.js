const categoryItem = document.querySelectorAll(".category-item");
const infoList = document.querySelectorAll(".info-list");
const categories = document.querySelector('.category');

categories.addEventListener('click', (event) => {
    const elem = event.target.closest('.category-item');
    if (!elem) {
        return;
    }
    const sectionId = elem.dataset.sectionId;

    categoryItem.forEach((item) => {
        if (item.classList.contains('active')) {
            item.classList.remove('active');
        }
    });

    infoList.forEach((elem) => {
        if (elem.classList.contains('active')) {
            elem.classList.remove('active');
        }
    });

    elem.classList.add('active');
    document.getElementById(sectionId).classList.add('active');
});

// open order history
const arrow = document.querySelectorAll(".arrow");

for (let i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", function () {
        this.classList.toggle("active");
        if (this.classList.contains("active")) {
            this.parentElement.classList.add("active")
        } else {
            this.parentElement.classList.remove("active")
        }
    })
}

// clear wishlist
const clearBtn = document.getElementsByClassName("clear-all")[0];
const wishesEmpty = document.getElementsByClassName("empty")[0];
// const wishesItem = document.getElementsByClassName("wishes-item")[0];
const wishesProducts = document.getElementsByClassName("products")[0];

clearBtn.addEventListener("click", function () {
    this.classList.toggle("active");
    if (this.classList.contains("active")) {
        this.parentElement.style.justifyContent = "center";
        wishesEmpty.classList.add("active");
        wishesProducts.classList.add("hidden");
        // wishesItem.classList.add("hidden")
    } else {
        wishesEmpty.classList.remove("active");
        wishesProducts.classList.remove("hidden");
        // wishesItem.classList.remove("hidden")
    }
});
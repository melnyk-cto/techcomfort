const categoryItem = document.getElementsByClassName("category-item");
for (let i = 0; i < categoryItem.length; i++) {
    categoryItem[i].addEventListener("click", function () {
        this.classList.toggle("active")
    })
}
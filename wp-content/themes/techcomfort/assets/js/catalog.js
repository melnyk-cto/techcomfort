document.addEventListener("DOMContentLoaded", function () {

  const buttonGrid = document.getElementsByClassName("grid-js")[0];
  const buttonList = document.getElementsByClassName("list-js")[0];
  const list = document.getElementsByClassName("products-list");

  if (buttonGrid) {
    buttonGrid.addEventListener("click", function () {
      buttonList.classList.remove("active");
      this.classList.add('active');
      for (let i = 0; i < list.length; i++) {
        list[i].classList.remove("list");
      }
    });

    buttonList.addEventListener("click", function () {
      buttonGrid.classList.remove("active");
      this.classList.add('active');
      for (let i = 0; i < list.length; i++) {
        list[i].classList.add("list")
      }
    });
  }

  // filter
  const filterClose = document.getElementsByClassName("close-filter")[0];
  const filterPanel = document.getElementsByClassName("filter")[0];
  const btnFilter = document.getElementsByClassName("btn-filter")[0];

  btnFilter.addEventListener("click", function () {
    filterPanel.style.visibility = "visible";
    filterPanel.style.opacity = "1";
  });
  filterClose.addEventListener("click", function () {
    filterPanel.style.visibility = "hidden";
    filterPanel.style.opacity = "0";
  });

  // Скрыть или показать элементы фильтра
  const showAll = document.getElementsByClassName('show-all-js');
  for (let i = 0; i < showAll.length; i++) {
    showAll[i].addEventListener('click', function () {
      this.parentElement.classList.toggle('hide');
      if (this.innerHTML === "Показать все") {
        this.innerHTML = "Скрыть все"
      } else {
        this.innerHTML = "Показать все"
      }
    });
  }
});
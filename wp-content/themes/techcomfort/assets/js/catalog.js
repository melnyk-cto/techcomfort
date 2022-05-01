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
  const keypressSlider = document.getElementsByClassName("slider-keypress");
  const input0 = document.getElementsByClassName("input-with-keypress-0");
  const input1 = document.getElementsByClassName("input-with-keypress-1");
  const button = document.getElementsByClassName("filler-range-js");

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

  // При обновлении страницы показывать текущее значение фильтра
  for (let i = 0; i < keypressSlider.length; i++) {
    const from = Number(input0[i].getAttribute('data-value-from'));
    const to = Number(input1[i].getAttribute('data-value-to'));
    let startFrom;
    let startTo;

    const url = new URL(window.location.href);
    let searchParams = url.searchParams.get(button[i].getAttribute('data-name'));
    if (searchParams) {
      const range = searchParams.split('.');
      startFrom = Number(range[0]);
      startTo = Number(range[1]);
    } else {
      startFrom = from;
      startTo = to;
    }

    const inputs = [input0[i], input1[i]];

    noUiSlider.create(keypressSlider[i], {
      start: [startFrom, startTo],
      connect: true,
      step: 1,
      range: {
        min: [from],
        max: [to]
      },
      format: {
        to: (v) => parseFloat(v).toFixed(0),
        from: (v) => parseFloat(v).toFixed(0)
      }
    });
    keypressSlider[i].noUiSlider.on("update", function (values, handle) {
      inputs[handle].value = values[handle];

      /* begin Listen to keypress on the input */
      function setSliderHandle(i, value) {
        const r = [null, null];
        r[i] = value;
        keypressSlider[i].noUiSlider.set(r);
      }

      // Listen to keydown events on the input field.
      inputs.forEach(function (input, handle) {
        input.addEventListener("change", function () {
          setSliderHandle(handle, this.value);
        });

        input.addEventListener("keydown", function (e) {
          const values = keypressSlider[i].noUiSlider.get();
          const value = Number(values[handle]);

          // [[handle0_down, handle0_up], [handle1_down, handle1_up]]
          const steps = keypressSlider[i].noUiSlider.steps();

          // [down, up]
          const step = steps[handle];

          let position;

          // 13 is enter,
          // 38 is key up,
          // 40 is key down.
          switch (e.which) {
            case 13:
              setSliderHandle(handle, this.value);
              break;

            case 38:
              // Get step to go increase slider value (up)
              position = step[1];

              // false = no step is set
              if (position === false) {
                position = 1;
              }

              // null = edge of slider
              if (position !== null) {
                setSliderHandle(handle, value + position);
              }

              break;

            case 40:
              position = step[0];

              if (position === false) {
                position = 1;
              }

              if (position !== null) {
                setSliderHandle(handle, value - position);
              }

              break;
          }
        });
      });
      /* end Listen to keypress on the input */
    });
  }


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
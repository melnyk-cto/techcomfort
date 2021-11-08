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

    // filter price
    const keypressSlider = document.querySelector(".slider-keypress");
    const input0 = document.querySelector(".input-with-keypress-0");
    const input1 = document.querySelector(".input-with-keypress-1");
    const inputs = [input0, input1];

    const url = new URL(window.location.href);
    let fromPrice;
    let toPrice;
    if (url.searchParams.get('from')) {
        fromPrice = url.searchParams.get('from');
    } else {
        fromPrice = 0;
    }
    if (url.searchParams.get('to')) {
        toPrice = url.searchParams.get('to');
    } else {
        toPrice = 500000;
    }
    noUiSlider.create(keypressSlider, {
        start: [fromPrice, toPrice],
        connect: true,
        step: 1,
        range: {
            min: [0],
            max: [500000]
        },
        format: {
            to: (v) => parseFloat(v).toFixed(0),
            from: (v) => parseFloat(v).toFixed(0)
        }
    });

    //filter
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

    keypressSlider.noUiSlider.on("update", function (values, handle) {
        inputs[handle].value = values[handle];

        /* begin Listen to keypress on the input */
        function setSliderHandle(i, value) {
            const r = [null, null];
            r[i] = value;
            keypressSlider.noUiSlider.set(r);
        }

        // Listen to keydown events on the input field.
        inputs.forEach(function (input, handle) {
            input.addEventListener("change", function () {
                setSliderHandle(handle, this.value);
            });

            input.addEventListener("keydown", function (e) {
                const values = keypressSlider.noUiSlider.get();
                const value = Number(values[handle]);

                // [[handle0_down, handle0_up], [handle1_down, handle1_up]]
                const steps = keypressSlider.noUiSlider.steps();

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


    // Скрыть или показать элементы фильтра
    const showAll = document.getElementsByClassName('show-all-js');
    console.log(showAll, 'showAll')

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
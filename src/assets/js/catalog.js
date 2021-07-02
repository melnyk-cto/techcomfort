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
var keypressSlider = document.querySelector(".slider-keypress");
var input0 = document.querySelector(".input-with-keypress-0");
var input1 = document.querySelector(".input-with-keypress-1");
var inputs = [input0, input1];

noUiSlider.create(keypressSlider, {
    start: [0, 30000],
    connect: true,
    step: 1,
    range: {
        min: [0],
        max: [30000]
    }
});
keypressSlider.noUiSlider.on("update", function (values, handle) {
    inputs[handle].value = values[handle];

    /* begin Listen to keypress on the input */
    function setSliderHandle(i, value) {
        var r = [null, null];
        r[i] = value;
        keypressSlider.noUiSlider.set(r);
    }

    // Listen to keydown events on the input field.
    inputs.forEach(function (input, handle) {
        input.addEventListener("change", function () {
            setSliderHandle(handle, this.value);
        });

        input.addEventListener("keydown", function (e) {
            var values = keypressSlider.noUiSlider.get();
            var value = Number(values[handle]);

            // [[handle0_down, handle0_up], [handle1_down, handle1_up]]
            var steps = keypressSlider.noUiSlider.steps();

            // [down, up]
            var step = steps[handle];

            var position;

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

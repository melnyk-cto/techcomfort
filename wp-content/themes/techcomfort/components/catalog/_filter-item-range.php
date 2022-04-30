<?php
    global $key;
    global $maxValue;
    global $name;
?>
<div class='filter-item price'><h5><?php echo $key ?></h5>
    <div class='style-2 wrapper m-b-50 p-l-r'>
        <div class='price-value'>
            <label>
                <input data-value-from='0' type='text' class='input-with-keypress-0 value'>
            </label>
            <span></span>
            <label>
                <input data-value-to='<?php echo $maxValue ?>' type='text' class='input-with-keypress-1 value'>
            </label>
            <button type='button' data-name='<?php echo str_replace(' ', '_', $name) ?>' class='btn filler-price-js filter-label-js'>
                ок
            </button>
        </div>
        <div class='slider-keypress m-b-20'></div>
    </div>
</div>
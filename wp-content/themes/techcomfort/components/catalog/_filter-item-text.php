<?php
    global $key;
    global $values_unique;
    global $temperature;
?>
<div class='filter-item <?php if (!$_GET[str_replace(' ', '_', $key)]) echo 'hide' ?>'><h5><?php echo $key ?></h5>
    <div class='filter-labels <?php if ($temperature) echo 'temperature' ?>'>
        <?php foreach ($values_unique as $value) {
            $title = $value;
            if ($key === 'Напряжение, частота, Фазы (В, Гц, ф)') {
                $arr1 = str_split($value, 7);
                $arr2 = str_split($arr1[1], 2);
                $arr3 = $arr1[0] . '/' . $arr2[0] . '/' . $arr2[1];
                $title = $arr3;
            }
            $formatKey = str_replace(' ', '_', $key);
            $formatValue = str_replace(' ', '_', $value); ?>
            <div class='filter-label filter-label-js' data-key="<?php echo $formatKey ?>" data-value=<?php echo $formatValue ?>>
                <input type='checkbox' <?php if ($_GET[str_replace(' ', '_', $key)] === $formatValue) echo 'checked' ?>><?php echo $title ?>
            </div>
        <?php } ?>
    </div>
    <span class='more show-all-js'>
         <?php
             if (!$_GET[str_replace(' ', '_', $key)]) { ?>
                 Показать все
             <?php } else { ?>
                 Скрыть все
             <?php } ?>
    </span></div>
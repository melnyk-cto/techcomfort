<?php
global $key;
global $values_unique
?>

<div class='filter-item hide'><h5><?php echo $key ?></h5>
    <div class='filter-labels'>
        <?php foreach ($values_unique as $value) {
            $title = $value;
            if ($key === 'Напряжение, частота, Фазы (В, Гц, ф)') {
                $arr1 = str_split($value, 7);
                $arr2 = str_split($arr1[1], 2);
                $arr3 = $arr1[0] . '/' . $arr2[0] . '/' . $arr2[1];
                $title = $arr3;
            }
            $formatKey = str_replace(' ', '_', $key);
            $compareValues = array_intersect_assoc($_GET, array($formatKey => $value)); ?>
            <label class='filter-label-js' data-key="<?php echo $formatKey ?>"
                   data-value=<?php echo $value ?>>
                <input type='checkbox'>
                <?php echo $title ?>
            </label>
        <?php } ?>
    </div>
    <span class='more show-all-js'>Показать все</span></div>
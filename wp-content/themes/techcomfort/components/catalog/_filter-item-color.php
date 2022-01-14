<?php
    global $key;
    global $values_unique;
?>
<div class='filter-item <?php if (!$_GET[str_replace(' ', '_', $key)]) echo 'hide' ?>'><h5><?php echo $key ?></h5>
    <div class='filter-labels colors'>
        <?php foreach ($values_unique as $value) {
            $formatKey = str_replace(' ', '_', $key);
            $formatValue = str_replace(' ', '_', $value);
            $currentColor = 'white';
            if ($value == 'бежевый') {
                $currentColor = 'beige';
            } else if ($value == 'золотистый') {
                $currentColor = 'gold';
            } else if ($value == 'черный' || $value == 'чёрный') {
                $currentColor = 'black';
            } else if ($value == 'титаниум') {
                $currentColor = 'titanium';
            } else if ($value == 'картина') {
                $currentColor = 'painting';
            } else if ($value == 'красный') {
                $currentColor = 'red';
            } else if ($value == 'белый/a - серебристый металлик') {
                $currentColor = 'silver-metallic';
            } else if ($value == 'белый / g - серый металлик') {
                $currentColor = 'grey-metallic';
            } else if ($value == 'зеркальный') {
                $currentColor = 'mirror';
            } else if ($value == 'зеркально-чёрный') {
                $currentColor = 'mirror-black';
            } else if ($value == 'серебристый') {
                $currentColor = 'silver';
            } else if ($value == 'черное зеркало') {
                $currentColor = 'black-mirror';
            } else if ($value == 'золотистый металлик') {
                $currentColor = 'golden-metallic';
            }
            ?>
            <div class='filter-label filter-label-js color-item' data-key="<?php echo $formatKey ?>"
                 data-value=<?php echo $formatValue ?>>
                <input hidden
                       type='checkbox' <?php if ($_GET[str_replace(' ', '_', $key)] === $formatValue) echo 'checked' ?>>
                <div title='<?php echo $value ?>' class='current-color <?php echo $currentColor ?>'></div>
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
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
            } else if ($value == 'картина' || $value === 'белый+4 варианта цвета передних панелей') {
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
            } else if ($value == 'дуб') {
                $currentColor = 'oak';
            } else if ($value == 'коричневый') {
                $currentColor = 'brown';
            } else if ($value == 'орех') {
                $currentColor = 'nut';
            } else if ($value == 'слоновая кость') {
                $currentColor = 'ivory';
            } else if ($value == 'бронзовый') {
                $currentColor = 'bronze';
            } else if ($value == 'сталь') {
                $currentColor = 'steel';
            } else if ($value == 'хром') {
                $currentColor = 'chromium';
            } else if ($value == 'оранжевый') {
                $currentColor = 'orange';
            } else if ($value == 'нержавеющая сталь') {
                $currentColor = 'stainless-steel';
            } else if ($value == 'серо-белый') {
                $currentColor = 'gray-white';
            } else if ($value == 'серый') {
                $currentColor = 'gray';
            } else if ($value == 'металлик') {
                $currentColor = 'metallic';
            } else if ($value == 'белый/черный' || $value === 'белый корпус+черная панель' || $value === 'белый+черное') {
                $currentColor = 'black-white';
            } else if ($value == 'голубой' || $value === 'голубой металлик') {
                $currentColor = 'blue';
            } else if ($value == 'терракотовый') {
                $currentColor = 'terracotta';
            } else if ($value == 'розовый') {
                $currentColor = 'pink';
            } else if ($value == 'бело-фиолетовый') {
                $currentColor = 'white-pink';
            } else if ($value == 'серо-фиолетовый') {
                $currentColor = 'grey-pink';
            } else if ($value == 'белый +серебро') {
                $currentColor = 'white-silver';
            } else if ($value == 'дерево') {
                $currentColor = 'tree';
            } else if ($value == 'черный с серебристыми вставками') {
                $currentColor = 'black-silver';
            } else if ($value == 'зеленый') {
                $currentColor = 'green';
            } else if ($value == 'белый и кофе' || $value == 'белый и кофейный') {
                $currentColor = 'white-coffee';
            }
            ?>
            <div class='filter-label filter-button-js filter-label-js color-item' data-key="<?php echo $formatKey ?>"
                 data-value=<?php echo $formatValue ?>>
                <input hidden
                       type='checkbox' <?php if ($_GET[str_replace(' ', '_', $key)] === $formatValue) echo 'checked' ?>>
                <div title='<?php echo $value ?>' class='current-color <?php echo $currentColor ?>'></div>
            </div>
        <?php } ?>
    </div>
    <span class='more show-all-js'><?php if (!$_GET[str_replace(' ', '_', $key)]) { ?>Показать все<?php } else { ?>Скрыть все<?php } ?></span>
</div>
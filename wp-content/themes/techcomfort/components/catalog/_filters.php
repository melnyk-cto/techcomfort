<div class='filter'>
    <div class='close close-filter'></div>
    <div class='filter-item selected-filters'>
        <h5>Выбрано</h5>
      <div class='selected-filter-content selected-filter-wrapper-js'></div>
    </div>
    <a href='/' class="btn clear-filters clear-filters-js">Очистить фильтрацию</a>
    <?php
        // Filters
        $argsForFilter = array('post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => $_GET['category']);
        $loopForFilter = new WP_Query($argsForFilter);
        $attributeArray = [];
        $productCatArray = [];
        while ($loopForFilter->have_posts()) :
            $loopForFilter->the_post();
            global $product;
            array_push($productCatArray, $loopForFilter->post->post_excerpt);
            $attributes = get_post_meta($loopForFilter->post->ID, '_global_attributes', true);
            if (is_array($attributes)) {
                foreach ($attributes as $attribute) {
                    if (!empty($attribute[1])) {
                        $formatKey = trim(preg_replace('/\s\s+/', '', str_replace("\n", "", $attribute[1])));
                        $attributeArray[$attribute[0]][] = mb_strtolower($formatKey);
                    }
                }
            } ?>
        <?php endwhile; ?>
    <?php wp_reset_query();
        // Фильтрация по цене
        $key = 'Цена';
        $maxValue = 500000;
        $name = 'Цена';
        include get_template_directory() . '/components/catalog/_filter-item-range.php';
        $key = 'Производитель';
        $values_unique = (array_unique($productCatArray));
        asort($values_unique);
        include get_template_directory() . '/components/catalog/_filter-item-text.php'; ?>
    <?php foreach ($attributeArray as $key => $values) {
        $maxValue = round(max($values));
        // Фильтрация по диапазону значений
        if ($key === 'Холодопроизводительность (кВт)' || $key === 'Теплопроизводительность (кВт)' || $key === 'Размеры внутреннего блока, Ш (мм)' || $key === 'Размеры внутреннего блока, В (мм)' || $key === 'Размеры внутреннего блока, Г (мм)' || $key === 'Размеры наружного блока, Ш (мм)' || $key === 'Размеры наружного блока, В (мм)' || $key === 'Размеры наружного блока, Г (мм)' || $key === 'Минимальный уровень шума внутреннего блока, (ДБ)') {
            $newValues = [];
            foreach ($values as $newValue) {
                if (strlen($newValue) <= 3) {
                    $haystack = $newValue;
                    $needle = '-';
                    $pos = strripos($haystack, $needle);
                    if ($pos === false) {
                        array_push($newValues, $newValue);
                    } else {
                        $explodeValue = explode("-", $newValue);
                        array_push($newValues, $explodeValue[1]);
                    }
                }
            }
            $maxValue = round(max($newValues));
            $name = $key;
            include get_template_directory() . '/components/catalog/_filter-item-range.php'; ?>
            <!-- Фильтрация по точному названию -->
        <?php } else if ($key !== 'Производитель') {
            // Убирает повторяющиеся значения из массива
            $values_unique = (array_unique($values));
            asort($values_unique);
            if ($key === 'Работа на обогрев до, градусов C') {
                $temperature = true;
            } else {
                $temperature = false;
            }
            include get_template_directory() . '/components/catalog/_filter-item-text.php'; ?>
        <?php }
    } ?>
</div>
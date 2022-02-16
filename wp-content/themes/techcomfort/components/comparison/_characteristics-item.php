<?php
    global $compare;
    global $title;
    global $_product;
    $isTitle = false;
?>


<?php
    $_product = wc_get_product($_product->get_id());
    if ($_product) {
        $attributes = $_product->get_description();
        $explodes = explode(PHP_EOL, $attributes);
        foreach ($explodes as $explode) {
            $explode = explode("|", $explode);
            if ($explode[1] === $title) {
                $isTitle = true;
            }
        }
    } ?>

<?php if ($isTitle) { ?>
    <li>
        <h5><?php echo $title ?></h5>
        <div class='product-value'>
            <?php
                $_product = wc_get_product($_product->get_id());
                if ($_product) {
                    $attributes = $_product->get_description();
                    $explodes = explode(PHP_EOL, $attributes);
                    $titles = [];
                    // Получем все заголовки
                    foreach ($explodes as $explode) {
                        $explodeSeparated = explode("|", $explode);
                        array_push($titles, $explodeSeparated[1]);
                    }
                    //  Проверяем есть ли нужен нам заголовок
                    if (in_array($title, $titles)) {
                        foreach ($explodes as $explode) {
                            $explodeSeparated = explode("|", $explode);
                            if ($explodeSeparated[1] === $title) { ?>
                                <p><?php echo $explodeSeparated[2] ?></p>
                            <?php }
                        }
                    } else {
                        echo '<p>Нет данных</p>';
                    }
                }
            ?>
        </div>
    </li>
<?php } ?>

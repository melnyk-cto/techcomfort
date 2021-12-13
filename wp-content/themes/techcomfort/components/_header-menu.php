<ul id="menu-slick" class="menu-list menu">
    <li class="menu-item"><a href="<?php echo home_url('/'); ?>" aria-current="page">Главная</a></li>
    <li class="menu-item">
        <a href="#" class="disable-link-js">Каталог</a>
        <ul class="sub-menu">
            <?php
                $terms = get_terms(['taxonomy' => 'product_cat', 'hide_empty' => false, 'order' => 'ASC', 'parent' => 0]);
                foreach ($terms as $term) {
                    $parentCategory = get_term_by('name', $term->name, 'product_cat');
                    $categoriesId = get_term_children($parentCategory->term_id, 'product_cat');
                    ?>
                    <li class="menu-item sub-item-js <?php if ($categoriesId) echo 'arrow' ?>">
                        <a href="<?php echo home_url('/'); ?>catalog?category=<?php echo $term->slug ?>" class="<?php if ($categoriesId) echo 'disable-link-js' ?>"><?php echo $term->name ?></a>
                        <?php
                            if ($categoriesId) { ?>
                                <ul class="sub-menu2">
                                    <?php
                                        $categoriesId = get_term_children($parentCategory->term_id, 'product_cat');
                                        foreach ($categoriesId as $categoryId) {
                                            $category = get_term_by('term_taxonomy_id', $categoryId, 'product_cat');
                                            $thumb_id = get_term_meta($categoryId, 'thumbnail_id', true);
                                            $term_img = wp_get_attachment_url($thumb_id);
                                            ?>
                                            <li>
                                                <a href="<?php echo home_url('/'); ?>catalog?category=<?php echo $category->slug ?>">
                                                    <img src='<?php echo $term_img ?>'
                                                         alt=''>
                                                    <?php echo $category->name ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                </ul>
                            <?php } ?>
                    </li>
                <?php } ?>
        </ul>
    </li>
    <li class="menu-item">
        <a href="<?php echo home_url('/'); ?>installation-and-assembly/">Установка и монтаж</a>
    </li>
    <li class="menu-item">
        <a href="<?php echo home_url('/'); ?>services/">Сервис</a></li>
    <li class="menu-item">
        <a href="<?php echo home_url('/'); ?>our-works/">Наши работы</a></li>
    <li class="menu-item">
        <a href="<?php echo home_url('/'); ?>payment-and-delivery/">Оплата и доставка</a>
    </li>
    <li class="menu-item">
        <a href="<?php echo home_url('/'); ?>contacts/">Контакты</a>
    </li>
</ul>
<?php /* Template Name: Page - Product */ ?>
<?php get_header(); ?>
<?php
    wp_enqueue_script('product-page-js', get_stylesheet_directory_uri() . '/assets/js/product-page.js');
?>
<?php
    $_product = wc_get_product($_GET["uid"]);
?>
<script>
  // Description for product page
  const descriptionProduct = `<?php echo $_product->get_description() ?>`;
</script>
<main class='product-page'>
    <section class='product-info'>
        <div class='container'>
            <h2>
                <?php echo $_product->get_title() ?>
                <div class='clipboard'>
                    <img class='clipboard' src='<?php echo get_template_directory_uri() ?>/assets/images/icons/share.svg'
                         alt=''>
                    <p class='d-none'>Ссылку скопировано</p>
                </div>
            </h2>
            <div class='product-info-inner'>
                <div class='product-info-slider'>
                    <div class='swiper-top'>
                        <div class='swiper-container swiper-product-top'>
                            <div class='swiper-wrapper'>
                                <div class='swiper-slide'>
                                    <div class='slider-image'>
                                        <?php echo $_product->get_image('1000') ?>
                                    </div>
                                </div>
                            </div>
                            <div class='swiper-pagination'></div>
                        </div>
                    </div>
                    <div class='swiper-bottom'>
                        <div class='swiper-container swiper-product'>
                            <div class='swiper-wrapper'>
                                <div class='swiper-slide'>
                                    <div class='slider-image'>
                                        <div class='slider-image'>
                                            <?php echo $_product->get_image('thumbnail') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='swiper-button-prev'></div>
                        <div class='swiper-button-next'></div>
                    </div>
                </div>
                <div class='product-info-description'>
                    <div class='description-info'>
                        <p>Код Товара: <?php echo $_product->get_sku() ?></p>
                        <p>Производитель: <?php echo $_product->get_short_description() ?></p>
                    </div>
                    <div class='area d-none'>
                        <h5>Площадь, М²</h5>
                        <ul class='area-list'>
                            <li class='area-item'></li>
                        </ul>
                    </div>
                    <div class='quantity'>
                        <h5>Количество</h5>
                        <div class='quantity-buttons'>
                            <button type='button' class='reduce'>-</button>
                            <label>
                                <input type='text' value='1' class='quantity-input'>
                            </label>
                            <button type='button' class='enlarge'>+</button>
                        </div>
                    </div>
                    <div class='buy'>
                        <p class='price'>
                            Цена: <span><?php echo $_product->get_price_html(); ?></span>
                        </p>
                        <a data-quantity="1" data-product_id="<?php echo $_GET["uid"]; ?>"
                           href='<?php echo home_url('/'); ?>?add-to-cart=<?php echo $_GET["uid"]; ?>'
                           class='btn product_type_simple add_to_cart_button ajax_add_to_cart'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="25.411" viewBox="0 0 27 25.411">
                                <path id="Контур_72" data-name="Контур 72"
                                      d="M26.844,5.935a.866.866,0,0,0-.673-.37L9.422,4.843a.866.866,0,0,0-.074,1.731l15.614.673-3.07,9.579H8.23L5.762,3.387a.866.866,0,0,0-.535-.65L1.183,1.149A.866.866,0,0,0,.55,2.761L4.144,4.174,6.656,17.849a.867.867,0,0,0,.852.71h.417L6.973,21.2a.722.722,0,0,0,.679.966H8.32a2.6,2.6,0,1,0,3.863,0h5.666a2.6,2.6,0,1,0,3.863,0h.812a.722.722,0,1,0,0-1.444H8.68l.78-2.166H22.524a.866.866,0,0,0,.825-.6l3.61-11.262A.864.864,0,0,0,26.844,5.935ZM10.252,25.056A1.155,1.155,0,1,1,11.407,23.9,1.156,1.156,0,0,1,10.252,25.056Zm9.529,0A1.155,1.155,0,1,1,20.936,23.9,1.156,1.156,0,0,1,19.781,25.056Z"
                                      transform="translate(0 -1.089)" fill="#fff" />
                            </svg>
                            купить
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='general-information'>
        <div class='container'>
            <div class='general-information-inner'>
                <div class='tabs buttons-container-js'>
                    <!--                    <a href='#description' class='btn btn-contour active'>Описание</a>-->
                    <a href='#characteristics' class='btn btn-contour'>Характеристики</a>
                    <a href='#reviews' class='btn btn-contour'>Отзывы</a>
                </div>
                <!--                <div id='description' class='description'>-->
                <!--                    <h5>Описание</h5>-->
                <!--                    <p>?????????</p>-->
                <!--                </div>-->
                <div id='characteristics' class='characteristics'>
                    <h5 class='product-title'>характеристики</h5>
                    <ul id="characteristics-list" class='characteristics-list'>
                        <li class='characteristics-item'>
                            <p>Тип кондиционера</p>
                            <span>настенный</span>
                        </li>
                    </ul>
                </div>
                <div id='reviews'>
                    <?php
                        $isAdvantages = true;
                        $isDisadvantages = true;
                        $title = 'Все Отзывы о продукте';
                        $addNewReviews = true;
                        $idGlobal = $_GET["uid"];
                        include get_template_directory() . '/components/_reviews-item.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <div class='container'>
        <?php include get_template_directory() . '/components/_viewed-products.php'; ?>
    </div>
</main>
<?php get_footer(); ?>

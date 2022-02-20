<?php /* Template Name: Page - My Account */ ?>
<?php get_header(); ?>
<?php
    // Обработка полей формы
    wp_enqueue_script('jquery-form');

    // Подключаем скрипты формы
    wp_enqueue_script('ajax-form', get_theme_file_uri('/assets/js/my-account.js'), array('jquery'), 1.0, true);
    wp_localize_script('ajax-form', 'ajax_form_object', array(
        'url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ajax-form-nonce'),
    ));
?>
    <main class='my-account'>
        <?php if (is_user_logged_in()) : ?>
            <?php
            $first_name = ucfirst(get_user_meta(get_current_user_id(), 'first_name', true));
            $last_name = ucfirst(get_user_meta(get_current_user_id(), 'last_name', true));
            $patronymic = ucfirst(get_user_meta(get_current_user_id(), 'user_registration_patronymic', true));
            $phone = ucfirst(get_user_meta(get_current_user_id(), 'user_registration_phone', true));
            $address = ucfirst(get_user_meta(get_current_user_id(), 'user_registration_address', true));
            $user_info = get_userdata(get_current_user_id());
            $user_email = $user_info->user_email; ?>
            <section class='personal-information'>
                <div class='container'>
                    <div class='personal-information-inner'>
                        <div class='category'>
                            <a href='#' class='category-item header-profile'>
                                <svg id="user" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                     viewBox="0 0 30 30">
                                    <g id="Сгруппировать_2816" data-name="Сгруппировать 2816">
                                        <path id="Контур_757" data-name="Контур 757"
                                              d="M25.607,19.393a14.942,14.942,0,0,0-5.7-3.575,8.672,8.672,0,1,0-9.813,0A15.024,15.024,0,0,0,0,30H2.344a12.656,12.656,0,0,1,25.313,0H30A14.9,14.9,0,0,0,25.607,19.393ZM15,15a6.328,6.328,0,1,1,6.328-6.328A6.335,6.335,0,0,1,15,15Z"
                                              fill="#6b92b0" />
                                    </g>
                                </svg>
                                <div class='item-description'>
                                    <h5>Techcomfort</h5>
                                    <p>
                                        <?php if ($user_email) {
                                            echo $user_email;
                                        } else {
                                            echo 'Не указано';
                                        } ?>
                                    </p>
                                </div>
                            </a>
                            <a href='#ordering' class='category-item header-ordering'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.657" height="32.443"
                                     viewBox="0 0 24.657 32.443">
                                    <g id="shopping-list" transform="translate(0.65 0.65)">
                                        <g id="Сгруппировать_2825" data-name="Сгруппировать 2825"
                                           transform="translate(5.839)">
                                            <g id="Сгруппировать_2824" data-name="Сгруппировать 2824">
                                                <path id="Контур_759" data-name="Контур 759"
                                                      d="M20.081,1.946H17.967a2.92,2.92,0,0,0-5.507,0H10.348a.974.974,0,0,0-.973.973V6.813a.974.974,0,0,0,.973.973h9.732a.974.974,0,0,0,.973-.973V2.92A.974.974,0,0,0,20.081,1.946Z"
                                                      transform="translate(-9.375)" fill="none" stroke="#6b92b0"
                                                      stroke-width="1.3" />
                                            </g>
                                        </g>
                                        <g id="Сгруппировать_2827" data-name="Сгруппировать 2827"
                                           transform="translate(0 3.893)">
                                            <g id="Сгруппировать_2826" data-name="Сгруппировать 2826">
                                                <path id="Контур_760" data-name="Контур 760"
                                                      d="M25.161,3.75H23.215V6.67a2.923,2.923,0,0,1-2.92,2.92H10.563a2.923,2.923,0,0,1-2.92-2.92V3.75H5.7A1.95,1.95,0,0,0,3.75,5.7V29.054A1.925,1.925,0,0,0,5.7,31H25.161a1.925,1.925,0,0,0,1.946-1.946V5.7A1.925,1.925,0,0,0,25.161,3.75ZM15.145,20.984l-3.893,3.893a.977.977,0,0,1-1.378,0L7.927,22.93A.973.973,0,1,1,9.3,21.554l1.259,1.257,3.2-3.2a.974.974,0,0,1,1.378,1.376Zm0-7.786-3.893,3.893a.977.977,0,0,1-1.378,0L7.927,15.145A.973.973,0,0,1,9.3,13.768l1.259,1.257,3.2-3.2A.974.974,0,0,1,15.145,13.2Zm7.1,10.016H18.348a.973.973,0,0,1,0-1.946h3.893a.973.973,0,1,1,0,1.946Zm0-7.786H18.348a.973.973,0,0,1,0-1.946h3.893a.973.973,0,1,1,0,1.946Z"
                                                      transform="translate(-3.75 -3.75)" fill="none"
                                                      stroke="#6b92b0"
                                                      stroke-width="1.3" />
                                                <path id="Контур_766" data-name="Контур 766"
                                                      d="M-.654.329H1.43L3.518,3.271H1.162Z"
                                                      transform="translate(4.414 9.993)"
                                                      fill="#6b92b0" />
                                                <path id="Контур_767" data-name="Контур 767"
                                                      d="M-.654.329H1.43L-3.023,5.217l-1.037-1.1Z"
                                                      transform="translate(10.414 7.993)" fill="#6b92b0" />
                                                <path id="Контур_768" data-name="Контур 768"
                                                      d="M-.654.329.771-.3,3.518,3.271H1.162Z"
                                                      transform="translate(4.414 17.993)" fill="#6b92b0" />
                                                <path id="Контур_769" data-name="Контур 769"
                                                      d="M.072-.187,1.43.329-3.023,5.217l-1.037-1.1Z"
                                                      transform="translate(10.414 15.993)" fill="#6b92b0" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <p>Мои заказы</p>
                            </a>
                            <a href='#favorites' class='category-item header-favorites'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26.93" height="23.95"
                                     viewBox="0 0 26.93 23.95">
                                    <path id="Контур_723" data-name="Контур 723"
                                          d="M18.675,1.465a6.021,6.021,0,0,0-3.76,1.3,8.566,8.566,0,0,0-2.2,2.646,8.565,8.565,0,0,0-2.2-2.646,6.021,6.021,0,0,0-3.76-1.3C2.9,1.465,0,4.615,0,8.792c0,4.513,3.623,7.6,9.108,12.274.931.794,1.987,1.693,3.084,2.653a.795.795,0,0,0,1.046,0c1.1-.96,2.153-1.859,3.085-2.654C21.807,16.392,25.43,13.3,25.43,8.792,25.43,4.615,22.526,1.465,18.675,1.465Z"
                                          transform="translate(0.75 -0.715)" fill="none" stroke="#6B92B0"
                                          stroke-width="1.5" />
                                </svg>
                                <p>Список желаний</p>
                            </a>
                            <a href='#viewed' class='category-item header-viewed'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30.555" height="18"
                                     viewBox="0 0 30.555 18">
                                    <g id="visibility" transform="translate(0.282 -6)">
                                        <g id="Сгруппировать_2813" data-name="Сгруппировать 2813">
                                            <g id="Сгруппировать_2812" data-name="Сгруппировать 2812">
                                                <path id="Контур_755" data-name="Контур 755"
                                                      d="M29.889,14.645C29.653,14.3,23.975,6.25,15,6.25,7.3,6.25.436,14.255.147,14.6a.627.627,0,0,0,0,.807C.436,15.745,7.3,23.75,15,23.75S29.564,15.745,29.853,15.4A.625.625,0,0,0,29.889,14.645ZM15,22.5C8.826,22.5,2.956,16.613,1.465,15,2.954,13.386,8.817,7.5,15,7.5c7.224,0,12.323,5.879,13.568,7.466C27.13,16.528,21.226,22.5,15,22.5Z"
                                                      fill="#6b92b0" stroke="#6b92b0" stroke-width="0.5" />
                                            </g>
                                        </g>
                                        <g id="Сгруппировать_2815" data-name="Сгруппировать 2815">
                                            <g id="Сгруппировать_2814" data-name="Сгруппировать 2814">
                                                <path id="Контур_756" data-name="Контур 756"
                                                      d="M15,10a5,5,0,1,0,5,5A5.005,5.005,0,0,0,15,10Zm0,8.75A3.75,3.75,0,1,1,18.75,15,3.755,3.755,0,0,1,15,18.75Z"
                                                      fill="#6b92b0" stroke="#6b92b0" stroke-width="0.5" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <p>Просмотренные товары</p>
                            </a>
                            <a href='#reviews' class='category-item header-reviews'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26.419" height="24.716"
                                     viewBox="0 0 26.419 24.716">
                                    <g id="Сгруппировать_2829" data-name="Сгруппировать 2829"
                                       transform="translate(-1.791 -5.284)">
                                        <g id="Сгруппировать_2828" data-name="Сгруппировать 2828">
                                            <path id="Контур_761" data-name="Контур 761"
                                                  d="M28.209,16.732a2.645,2.645,0,0,0-2.642-2.642H18.527a15.294,15.294,0,0,0,.876-5.13,3.681,3.681,0,0,0-3.677-3.677H15a.881.881,0,0,0-.881.881c0,2.036-.793,5.712-2.233,7.152l-.056.056a9.742,9.742,0,0,1-2.995,1.935v-.336a.881.881,0,0,0-.881-.881H2.671a.881.881,0,0,0-.881.881V29.119A.881.881,0,0,0,2.671,30H7.955a.881.881,0,0,0,.881-.881V28.58A20.534,20.534,0,0,0,16.1,30h5.948A2.642,2.642,0,0,0,24.5,26.385a2.642,2.642,0,0,0,1.761-3.522,2.647,2.647,0,0,0,1.947-2.549,2.712,2.712,0,0,0-.688-1.8A2.632,2.632,0,0,0,28.209,16.732Zm-21.135,0V28.239H3.552V15.851H7.074Zm18.493,4.462H20.284a.881.881,0,1,0,0,1.761h3.522a.881.881,0,1,1,0,1.761H20.284a.881.881,0,1,0,0,1.761h1.761a.881.881,0,1,1,0,1.761H16.1a20.332,20.332,0,0,1-7.261-1.515V17.276a13.554,13.554,0,0,0,4.3-2.714C14.694,13,15.638,9.222,15.84,7.049a1.918,1.918,0,0,1,1.8,1.912c0,1.369-.533,4.417-1.5,5.387a.881.881,0,0,0,.623,1.5h8.806a.881.881,0,0,1,0,1.761H20.284a.881.881,0,1,0,0,1.761h5.284a.935.935,0,0,1,.881.939A.882.882,0,0,1,25.567,21.194Z"
                                                  fill="#6b92b0" />
                                        </g>
                                    </g>
                                </svg>
                                <p>Мои отзывы</p>
                            </a>
                        </div>
                        <div class='info'>
                            <?php include get_template_directory() . '/components/account/_personal-area.php'; ?>
                            <div class='info-list ordering'>
                                <h2>Мои заказы</h2>
                                <!--                                <div class='info-item ordering-item'>-->
                                <!--                                    <span class='arrow'></span>-->
                                <!--                                    <div class='item-image'>-->
                                <!--                                        <img src='-->
                                <?php //echo get_template_directory_uri() ?><!--/assets/images/product-gallery-4.jpg'-->
                                <!--                                             alt='кондиционер'>-->
                                <!--                                    </div>-->
                                <!--                                    <div class='item-description'>-->
                                <!--                                        <div class='order-number'>-->
                                <!--                                            <span>№ 346 857 123 от 29.06.2021</span>-->
                                <!--                                            <p>Сделаное</p>-->
                                <!--                                        </div>-->
                                <!--                                        <div class='order-price'>-->
                                <!--                                            <span>сумма заказа</span>-->
                                <!--                                            <p>8 760 UAH</p>-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                                <!--                                    <div class='order-history'>-->
                                <!--                                        <div class='order-history-left'>-->
                                <!--                                            <h5>История заказа</h5>-->
                                <!--                                            <p>Информация о заказе</p>-->
                                <!--                                            <ul>-->
                                <!--                                                <li>THH 20450405247481</li>-->
                                <!--                                                <li>Доставка курьером по Киеву</li>-->
                                <!--                                                <li>Киевская обл., Печерский р-н., Печерск, Генерала Алмазова ул.,-->
                                <!--                                                    кв.145-->
                                <!--                                                </li>-->
                                <!--                                                <li>Тюльпан Федотов</li>-->
                                <!--                                                <li>-->
                                <!--                                                    <a href='tel:38(097) 107 25 25'>38(097) 107 25 25</a>-->
                                <!--                                                </li>-->
                                <!--                                                <li>-->
                                <!--                                                    <a href='mailto:techcomfort@gmail.com'>techcomfort@gmail.com</a>-->
                                <!--                                                </li>-->
                                <!--                                            </ul>-->
                                <!--                                        </div>-->
                                <!--                                        <div class='order-history-right'>-->
                                <!--                                            <div class='order-data'>-->
                                <!--                                                <div class='data-product'>-->
                                <!--                                                    <div class='product-image'>-->
                                <!--                                                        <img src='-->
                                <?php //echo get_template_directory_uri() ?><!--/assets/images/product-gallery-5.jpg'-->
                                <!--                                                             alt='Кондиционер'>-->
                                <!--                                                    </div>-->
                                <!--                                                    <h5>C&H CH-S07GKP8</h5>-->
                                <!--                                                </div>-->
                                <!--                                                <div class='data-price'>-->
                                <!--                                                    <span>цена</span>-->
                                <!--                                                    <p>8 760 UAH</p>-->
                                <!--                                                </div>-->
                                <!--                                                <div class='data-amount'>-->
                                <!--                                                    <span>количество</span>-->
                                <!--                                                    <p>1</p>-->
                                <!--                                                </div>-->
                                <!--                                                <div class='data-price'>-->
                                <!--                                                    <span>сумма заказа</span>-->
                                <!--                                                    <p>8 760 UAH</p>-->
                                <!--                                                </div>-->
                                <!--                                            </div>-->
                                <!--                                            <div class='order-delivery'>-->
                                <!--                                                <div class='delivery-item'>-->
                                <!--                                                    <span>Оплата</span>-->
                                <!--                                                    <p>Оплата при получении в службах доставки</p>-->
                                <!--                                                </div>-->
                                <!--                                                <div class='delivery-item'>-->
                                <!--                                                    <span>Доставка</span>-->
                                <!--                                                    <p>Доставка курьером по Киеву</p>-->
                                <!--                                                </div>-->
                                <!--                                                <div class='delivery-item'>-->
                                <!--                                                    <span>Вместе</span>-->
                                <!--                                                    <span class='price'>8 760 UAH</span>-->
                                <!--                                                </div>-->
                                <!--                                                <button type='button' class='btn'>Повторить заказ</button>-->
                                <!--                                            </div>-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <p class='empty'>Список заказов пуст</p>
                            </div>
                            <div class='info-list favorites '>
                                <h2>Список желаний</h2>
                                <p class='empty'>Список желаний пуст</p>
                                <?php include get_template_directory() . '/components/account/_favorites.php'; ?>
                            </div>
                            <div class='info-list viewed-products '>
                                <h2>Просмотренные товары</h2>
                                 <?php include get_template_directory() . '/components/account/_products-viewed.php'; ?>
                            </div>
                            <div class='info-list reviews '>
                                <?php
                                    $isAdvantages = false;
                                    $isDisadvantages = false;
                                    $title = 'МОИ ОТЗЫВЫ';
                                    $addNewReviews = false;
                                    $idUser = get_current_user_id();
                                    include get_template_directory() . '/components/_reviews-item.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php else : ?>
            <script>
              window.location.href = '/login'
            </script>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>
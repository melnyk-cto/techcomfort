<?php /* Template Name: Page - My Account */ ?>
<?php get_header(); ?>
<?php
    wp_enqueue_script('my-account-js', get_stylesheet_directory_uri() . '/assets/js/my-account.js');
?>
<main class='my-account'>
    <?php

        $first_name = ucfirst(get_user_meta(get_current_user_id(), 'first_name', true));
        $last_name = ucfirst(get_user_meta(get_current_user_id(), 'last_name', true));
        $patronymic = ucfirst(get_user_meta(get_current_user_id(), 'patronymic', true));
        $phone = ucfirst(get_user_meta(get_current_user_id(), 'phone', true));
        $user_email = ucfirst(get_user_meta(get_current_user_id(), 'user_email', true));
        $address = ucfirst(get_user_meta(get_current_user_id(), 'address', true));
    ?>
    <section class='personal-information'>
        <div class='container'>
            <div class='personal-information-inner'>
                <div class='category'>
                    <div data-section-id='info-profile' class='category-item header-profile active'>
                        <svg id="user" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
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
                    </div>
                    <div data-section-id='info-ordering' class='category-item header-ordering'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24.657" height="32.443"
                             viewBox="0 0 24.657 32.443">
                            <g id="shopping-list" transform="translate(0.65 0.65)">
                                <g id="Сгруппировать_2825" data-name="Сгруппировать 2825" transform="translate(5.839)">
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
                                              transform="translate(-3.75 -3.75)" fill="none" stroke="#6b92b0"
                                              stroke-width="1.3" />
                                        <path id="Контур_766" data-name="Контур 766"
                                              d="M-.654.329H1.43L3.518,3.271H1.162Z" transform="translate(4.414 9.993)"
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
                    </div>
                    <div data-section-id='info-wishes' class='category-item header-favorites'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="26.93" height="23.95" viewBox="0 0 26.93 23.95">
                            <path id="Контур_723" data-name="Контур 723"
                                  d="M18.675,1.465a6.021,6.021,0,0,0-3.76,1.3,8.566,8.566,0,0,0-2.2,2.646,8.565,8.565,0,0,0-2.2-2.646,6.021,6.021,0,0,0-3.76-1.3C2.9,1.465,0,4.615,0,8.792c0,4.513,3.623,7.6,9.108,12.274.931.794,1.987,1.693,3.084,2.653a.795.795,0,0,0,1.046,0c1.1-.96,2.153-1.859,3.085-2.654C21.807,16.392,25.43,13.3,25.43,8.792,25.43,4.615,22.526,1.465,18.675,1.465Z"
                                  transform="translate(0.75 -0.715)" fill="none" stroke="#6B92B0" stroke-width="1.5" />
                        </svg>
                        <p>Список желаний</p>
                    </div>
                    <div data-section-id='info-viewed' class='category-item header-viewed'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30.555" height="18" viewBox="0 0 30.555 18">
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
                    </div>
                    <div data-section-id='info-reviews' class='category-item header-reviews'>
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
                    </div>
                </div>
                <div class='info'>
                    <?php include get_template_directory() . '/components/account/_personal-area.php'; ?>
                    <div id='info-ordering' class='info-list ordering'>
                        <h2>Мои заказы</h2>
                        <div class='info-item ordering-item'>
                            <span class='arrow'></span>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-4.jpg'
                                     alt='кондиционер'>
                            </div>
                            <div class='item-description'>
                                <div class='order-number'>
                                    <span>№ 346 857 123 от 29.06.2021</span>
                                    <p>Сделаное</p>
                                </div>
                                <div class='order-price'>
                                    <span>сумма заказа</span>
                                    <p>8 760 UAH</p>
                                </div>
                            </div>
                            <div class='order-history'>
                                <div class='order-history-left'>
                                    <h5>История заказа</h5>
                                    <p>Информация о заказе</p>
                                    <ul>
                                        <li>THH 20450405247481</li>
                                        <li>Доставка курьером по Киеву</li>
                                        <li>Киевская обл., Печерский р-н., Печерск, Генерала Алмазова ул., кв.145</li>
                                        <li>Тюльпан Федотов</li>
                                        <li>
                                            <a href='tel:38(097) 107 25 25'>38(097) 107 25 25</a>
                                        </li>
                                        <li>
                                            <a href='mailto:techcomfort@gmail.com'>techcomfort@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class='order-history-right'>
                                    <div class='order-data'>
                                        <div class='data-product'>
                                            <div class='product-image'>
                                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-5.jpg'
                                                     alt='Кондиционер'>
                                            </div>
                                            <h5>C&H CH-S07GKP8</h5>
                                        </div>
                                        <div class='data-price'>
                                            <span>цена</span>
                                            <p>8 760 UAH</p>
                                        </div>
                                        <div class='data-amount'>
                                            <span>количество</span>
                                            <p>1</p>
                                        </div>
                                        <div class='data-price'>
                                            <span>сумма заказа</span>
                                            <p>8 760 UAH</p>
                                        </div>
                                    </div>
                                    <div class='order-delivery'>
                                        <div class='delivery-item'>
                                            <span>Оплата</span>
                                            <p>Оплата при получении в службах доставки</p>
                                        </div>
                                        <div class='delivery-item'>
                                            <span>Доставка</span>
                                            <p>Доставка курьером по Киеву</p>
                                        </div>
                                        <div class='delivery-item'>
                                            <span>Вместе</span>
                                            <span class='price'>8 760 UAH</span>
                                        </div>
                                        <button type='button' class='btn'>Повторить заказ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='info-item ordering-item'>
                            <span class='arrow'></span>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-6.jpg'
                                     alt='кондиционер'>
                            </div>
                            <div class='item-description'>
                                <div class='order-number'>
                                    <span>№ 346 857 123 от 29.06.2021</span>
                                    <p>Сделаное</p>
                                </div>
                                <div class='order-price'>
                                    <span>сумма заказа</span>
                                    <p>8 760 UAH</p>
                                </div>
                            </div>
                            <div class='order-history'>
                                <div class='order-history-left'>
                                    <h5>История заказа</h5>
                                    <p>Информация о заказе</p>
                                    <ul>
                                        <li>THH 20450405247481</li>
                                        <li>Доставка курьером по Киеву</li>
                                        <li>Киевская обл., Печерский р-н., Печерск, Генерала Алмазова ул., кв.145</li>
                                        <li>Тюльпан Федотов</li>
                                        <li>
                                            <a href='tel:38(097) 107 25 25'>38(097) 107 25 25</a>
                                        </li>
                                        <li>
                                            <a href='mailto:techcomfort@gmail.com'>techcomfort@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class='order-history-right'>
                                    <div class='order-data'>
                                        <div class='data-product'>
                                            <div class='product-image'>
                                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-7.jpg'
                                                     alt='Кондиционер'>
                                            </div>
                                            <h5>C&H CH-S07GKP8</h5>
                                        </div>
                                        <div class='data-price'>
                                            <span>цена</span>
                                            <p>8 760 UAH</p>
                                        </div>
                                        <div class='data-amount'>
                                            <span>количество</span>
                                            <p>1</p>
                                        </div>
                                        <div class='data-price'>
                                            <span>сумма заказа</span>
                                            <p>8 760 UAH</p>
                                        </div>
                                    </div>
                                    <div class='order-delivery'>
                                        <div class='delivery-item'>
                                            <span>Оплата</span>
                                            <p>Оплата при получении в службах доставки</p>
                                        </div>
                                        <div class='delivery-item'>
                                            <span>Доставка</span>
                                            <p>Доставка курьером по Киеву</p>
                                        </div>
                                        <div class='delivery-item'>
                                            <span>Вместе</span>
                                            <span class='price'>8 760 UAH</span>
                                        </div>
                                        <button type='button' class='btn'>Повторить заказ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='info-item ordering-item'>
                            <span class='arrow'></span>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-8.jpg'
                                     alt='кондиционер'>
                            </div>
                            <div class='item-description'>
                                <div class='order-number'>
                                    <span>№ 346 857 123 от 29.06.2021</span>
                                    <p>Сделаное</p>
                                </div>
                                <div class='order-price'>
                                    <span>сумма заказа</span>
                                    <p>8 760 UAH</p>
                                </div>
                            </div>
                            <div class='order-history'>
                                <div class='order-history-left'>
                                    <h5>История заказа</h5>
                                    <p>Информация о заказе</p>
                                    <ul>
                                        <li>THH 20450405247481</li>
                                        <li>Доставка курьером по Киеву</li>
                                        <li>Киевская обл., Печерский р-н., Печерск, Генерала Алмазова ул., кв.145</li>
                                        <li>Тюльпан Федотов</li>
                                        <li>
                                            <a href='tel:38(097) 107 25 25'>38(097) 107 25 25</a>
                                        </li>
                                        <li>
                                            <a href='mailto:techcomfort@gmail.com'>techcomfort@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class='order-history-right'>
                                    <div class='order-data'>
                                        <div class='data-product'>
                                            <div class='product-image'>
                                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-9.jpg'
                                                     alt='Кондиционер'>
                                            </div>
                                            <h5>C&H CH-S07GKP8</h5>
                                        </div>
                                        <div class='data-price'>
                                            <span>цена</span>
                                            <p>8 760 UAH</p>
                                        </div>
                                        <div class='data-amount'>
                                            <span>количество</span>
                                            <p>1</p>
                                        </div>
                                        <div class='data-price'>
                                            <span>сумма заказа</span>
                                            <p>8 760 UAH</p>
                                        </div>
                                    </div>
                                    <div class='order-delivery'>
                                        <div class='delivery-item'>
                                            <span>Оплата</span>
                                            <p>Оплата при получении в службах доставки</p>
                                        </div>
                                        <div class='delivery-item'>
                                            <span>Доставка</span>
                                            <p>Доставка курьером по Киеву</p>
                                        </div>
                                        <div class='delivery-item'>
                                            <span>Вместе</span>
                                            <span class='price'>8 760 UAH</span>
                                        </div>
                                        <button type='button' class='btn'>Повторить заказ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='info-item ordering-item'>
                            <span class='arrow'></span>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-10.jpg'
                                     alt='кондиционер'>
                            </div>
                            <div class='item-description'>
                                <div class='order-number'>
                                    <span>№ 346 857 123 от 29.06.2021</span>
                                    <p>Сделаное</p>
                                </div>
                                <div class='order-price'>
                                    <span>сумма заказа</span>
                                    <p>8 760 UAH</p>
                                </div>
                            </div>
                            <div class='order-history'>
                                <div class='order-history-left'>
                                    <h5>История заказа</h5>
                                    <p>Информация о заказе</p>
                                    <ul>
                                        <li>THH 20450405247481</li>
                                        <li>Доставка курьером по Киеву</li>
                                        <li>Киевская обл., Печерский р-н., Печерск, Генерала Алмазова ул., кв.145</li>
                                        <li>Тюльпан Федотов</li>
                                        <li>
                                            <a href='tel:38(097) 107 25 25'>38(097) 107 25 25</a>
                                        </li>
                                        <li>
                                            <a href='mailto:techcomfort@gmail.com'>techcomfort@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class='order-history-right'>
                                    <div class='order-data'>
                                        <div class='data-product'>
                                            <div class='product-image'>
                                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-11.jpg'
                                                     alt='Кондиционер'>
                                            </div>
                                            <h5>C&H CH-S07GKP8</h5>
                                        </div>
                                        <div class='data-price'>
                                            <span>цена</span>
                                            <p>8 760 UAH</p>
                                        </div>
                                        <div class='data-amount'>
                                            <span>количество</span>
                                            <p>1</p>
                                        </div>
                                        <div class='data-price'>
                                            <span>сумма заказа</span>
                                            <p>8 760 UAH</p>
                                        </div>
                                    </div>
                                    <div class='order-delivery'>
                                        <div class='delivery-item'>
                                            <span>Оплата</span>
                                            <p>Оплата при получении в службах доставки</p>
                                        </div>
                                        <div class='delivery-item'>
                                            <span>Доставка</span>
                                            <p>Доставка курьером по Киеву</p>
                                        </div>
                                        <div class='delivery-item'>
                                            <span>Вместе</span>
                                            <span class='price'>8 760 UAH</span>
                                        </div>
                                        <button type='button' class='btn'>Повторить заказ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id='info-wishes' class='info-list wishes'>
                        <h2>
                            Список желаний
                            <button type='button' class='clear-all'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.558" height="19.999"
                                     viewBox="0 0 15.558 19.999">
                                    <g id="delete" transform="translate(-0.001 -0.001)">
                                        <path id="Объединение_10" data-name="Объединение 10"
                                              d="M11051.3-222a1.286,1.286,0,0,1-1.227-1.252l-.928-12.669a.624.624,0,0,1,.05-.3h-1.266a.462.462,0,0,1-.264-.083.563.563,0,0,1-.209-.625l.4-1.286a.777.777,0,0,1,.728-.569h13.258a.78.78,0,0,1,.729.569l.395,1.286a.554.554,0,0,1-.208.625.453.453,0,0,1-.264.083h-1.264a.624.624,0,0,1,.05.3l-.927,12.669a1.289,1.289,0,0,1-1.228,1.252Zm6.8-12.444-.553,10.4a.63.63,0,0,0,.553.689.172.172,0,0,0,.036,0,.62.62,0,0,0,.589-.616l.558-10.4a.637.637,0,0,0-.558-.691h-.033A.622.622,0,0,0,11058.1-234.444Zm-3.474.039V-224a.627.627,0,0,0,.592.652.625.625,0,0,0,.591-.652v-10.4a.623.623,0,0,0-.591-.652A.625.625,0,0,0,11054.625-234.405Zm-2.929-.652a.635.635,0,0,0-.556.694l.583,10.4a.619.619,0,0,0,.589.614.159.159,0,0,0,.036,0,.63.63,0,0,0,.553-.691l-.581-10.4a.621.621,0,0,0-.592-.615Zm5.322-5.028v-.608h-3.615v.608h-1.3v-.694a1.22,1.22,0,0,1,1.219-1.219h3.787a1.22,1.22,0,0,1,1.219,1.219v.694Z"
                                              transform="translate(-11047.431 242)" fill="#6b92b0" />
                                    </g>
                                </svg>
                                <span>Очистить все</span>
                            </button>
                        </h2>
                        <p class='empty'>Список желаний пуст</p>
                        <div class='products'>
                            <div class='products-list '>
                                <div class='products-item catalog-item'>
                                    <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-12.jpg'
                                             alt='Кондиционер'>
                                    </a>
                                    <div class='item-description'>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                        </div>
                                        <a href='<?php echo home_url('/'); ?>product'>
                                            C&H CH-S07GKP8
                                            <div class='description-icons'>
                                                <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                     height="24.07"
                                                     viewBox="0 0 27 24.07">
                                                    <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                       transform="translate(1 -0.465)">
                                                        <path id="Контур_714" data-name="Контур 714"
                                                              d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                              fill="none" stroke="#6b92b0" stroke-width="2" />
                                                    </g>
                                                </svg>
                                                <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                     viewBox="0 0 512 512"
                                                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                            </div>
                                        </a>
                                        <p>
                                            Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                            XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                            фильтр Eco-fresh
                                        </p>
                                        <span class='price'>8 760 UAH</span>
                                        <div class='description-buttons'>
                                            <a href='#' class='btn'>Купить</a>
                                            <a href='#' class='btn btn-second'>В Корзину</a>
                                        </div>
                                    </div>
                                    <div class='item-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='products-item catalog-item'>
                                    <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-13.jpg'
                                             alt='Кондиционер'>
                                    </a>
                                    <div class='item-description'>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                        </div>
                                        <a href='<?php echo home_url('/'); ?>product'>
                                            C&H CH-S07GKP8
                                            <div class='description-icons'>
                                                <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                     height="24.07"
                                                     viewBox="0 0 27 24.07">
                                                    <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                       transform="translate(1 -0.465)">
                                                        <path id="Контур_714" data-name="Контур 714"
                                                              d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                              fill="none" stroke="#6b92b0" stroke-width="2" />
                                                    </g>
                                                </svg>
                                                <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                     viewBox="0 0 512 512"
                                                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                            </div>
                                        </a>
                                        <p>
                                            Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                            XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                            фильтр Eco-fresh
                                        </p>
                                        <span class='price'>8 760 UAH</span>
                                        <div class='description-buttons'>
                                            <a href='#' class='btn'>Купить</a>
                                            <a href='#' class='btn btn-second'>В Корзину</a>
                                        </div>
                                    </div>
                                    <div class='item-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='products-item catalog-item'>
                                    <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-14.jpg'
                                             alt='Кондиционер'>
                                    </a>
                                    <div class='item-description'>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                        </div>
                                        <a href='<?php echo home_url('/'); ?>product'>
                                            C&H CH-S07GKP8
                                            <div class='description-icons'>
                                                <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                     height="24.07"
                                                     viewBox="0 0 27 24.07">
                                                    <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                       transform="translate(1 -0.465)">
                                                        <path id="Контур_714" data-name="Контур 714"
                                                              d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                              fill="none" stroke="#6b92b0" stroke-width="2" />
                                                    </g>
                                                </svg>
                                                <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                     viewBox="0 0 512 512"
                                                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                            </div>
                                        </a>
                                        <p>
                                            Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                            XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                            фильтр Eco-fresh
                                        </p>
                                        <span class='price'>8 760 UAH</span>
                                        <div class='description-buttons'>
                                            <a href='#' class='btn'>Купить</a>
                                            <a href='#' class='btn btn-second'>В Корзину</a>
                                        </div>
                                    </div>
                                    <div class='item-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='info-item wishes-item'>
                            <div class='item-description'>
                                <div class='description-item'>
                                    <span>1 товар на сумму</span>
                                    <p>26 280 UAH</p>
                                </div>
                                <a href='#' class='btn'>Купить все</a>
                            </div>
                        </div>
                    </div>
                    <div id='info-viewed' class='info-list viewed-products d-none'>
                        <h2>
                            Просмотренные товары
                        </h2>
                        <div class='products'>
                            <div class='products-list '>
                                <div class='products-item catalog-item'>
                                    <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-15.jpg'
                                             alt='Кондиционер'>
                                    </a>
                                    <div class='item-description'>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                        </div>
                                        <a href='<?php echo home_url('/'); ?>product'>
                                            C&H CH-S07GKP8
                                            <div class='description-icons'>
                                                <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                     height="24.07"
                                                     viewBox="0 0 27 24.07">
                                                    <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                       transform="translate(1 -0.465)">
                                                        <path id="Контур_714" data-name="Контур 714"
                                                              d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                              fill="none" stroke="#6b92b0" stroke-width="2" />
                                                    </g>
                                                </svg>
                                                <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                     viewBox="0 0 512 512"
                                                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                            </div>
                                        </a>
                                        <p>
                                            Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                            XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                            фильтр Eco-fresh
                                        </p>
                                        <span class='price'>8 760 UAH</span>
                                        <div class='description-buttons'>
                                            <a href='#' class='btn'>Купить</a>
                                            <a href='#' class='btn btn-second'>В Корзину</a>
                                        </div>
                                    </div>
                                    <div class='item-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='products-item catalog-item'>
                                    <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-26.jpg'
                                             alt='Кондиционер'>
                                    </a>
                                    <div class='item-description'>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                        </div>
                                        <a href='<?php echo home_url('/'); ?>product'>
                                            C&H CH-S07GKP8
                                            <div class='description-icons'>
                                                <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                     height="24.07"
                                                     viewBox="0 0 27 24.07">
                                                    <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                       transform="translate(1 -0.465)">
                                                        <path id="Контур_714" data-name="Контур 714"
                                                              d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                              fill="none" stroke="#6b92b0" stroke-width="2" />
                                                    </g>
                                                </svg>
                                                <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                     viewBox="0 0 512 512"
                                                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                            </div>
                                        </a>
                                        <p>
                                            Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                            XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                            фильтр Eco-fresh
                                        </p>
                                        <span class='price'>8 760 UAH</span>
                                        <div class='description-buttons'>
                                            <a href='#' class='btn'>Купить</a>
                                            <a href='#' class='btn btn-second'>В Корзину</a>
                                        </div>
                                    </div>
                                    <div class='item-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='products-item catalog-item'>
                                    <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-27.jpg'
                                             alt='Кондиционер'>
                                    </a>
                                    <div class='item-description'>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                        </div>
                                        <a href='<?php echo home_url('/'); ?>product'>
                                            C&H CH-S07GKP8
                                            <div class='description-icons'>
                                                <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                     height="24.07"
                                                     viewBox="0 0 27 24.07">
                                                    <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                       transform="translate(1 -0.465)">
                                                        <path id="Контур_714" data-name="Контур 714"
                                                              d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                              fill="none" stroke="#6b92b0" stroke-width="2" />
                                                    </g>
                                                </svg>
                                                <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                     viewBox="0 0 512 512"
                                                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                            </div>
                                        </a>
                                        <p>
                                            Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                            XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                            фильтр Eco-fresh
                                        </p>
                                        <span class='price'>8 760 UAH</span>
                                        <div class='description-buttons'>
                                            <a href='#' class='btn'>Купить</a>
                                            <a href='#' class='btn btn-second'>В Корзину</a>
                                        </div>
                                    </div>
                                    <div class='item-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                            </div>
                            <div class='products-list '>
                                <div class='products-item catalog-item'>
                                    <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-19.jpg'
                                             alt='Кондиционер'>
                                    </a>
                                    <div class='item-description'>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                        </div>
                                        <a href='<?php echo home_url('/'); ?>product'>
                                            C&H CH-S07GKP8
                                            <div class='description-icons'>
                                                <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                     height="24.07"
                                                     viewBox="0 0 27 24.07">
                                                    <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                       transform="translate(1 -0.465)">
                                                        <path id="Контур_714" data-name="Контур 714"
                                                              d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                              fill="none" stroke="#6b92b0" stroke-width="2" />
                                                    </g>
                                                </svg>
                                                <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                     viewBox="0 0 512 512"
                                                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                            </div>
                                        </a>
                                        <p>
                                            Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                            XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                            фильтр Eco-fresh
                                        </p>
                                        <span class='price'>8 760 UAH</span>
                                        <div class='description-buttons'>
                                            <a href='#' class='btn'>Купить</a>
                                            <a href='#' class='btn btn-second'>В Корзину</a>
                                        </div>
                                    </div>
                                    <div class='item-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='products-item catalog-item'>
                                    <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-20.jpg'
                                             alt='Кондиционер'>
                                    </a>
                                    <div class='item-description'>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                        </div>
                                        <a href='<?php echo home_url('/'); ?>product'>
                                            C&H CH-S07GKP8
                                            <div class='description-icons'>
                                                <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                     height="24.07"
                                                     viewBox="0 0 27 24.07">
                                                    <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                       transform="translate(1 -0.465)">
                                                        <path id="Контур_714" data-name="Контур 714"
                                                              d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                              fill="none" stroke="#6b92b0" stroke-width="2" />
                                                    </g>
                                                </svg>
                                                <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                     viewBox="0 0 512 512"
                                                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                            </div>
                                        </a>
                                        <p>
                                            Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                            XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                            фильтр Eco-fresh
                                        </p>
                                        <span class='price'>8 760 UAH</span>
                                        <div class='description-buttons'>
                                            <a href='#' class='btn'>Купить</a>
                                            <a href='#' class='btn btn-second'>В Корзину</a>
                                        </div>
                                    </div>
                                    <div class='item-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='products-item catalog-item'>
                                    <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-21.jpg'
                                             alt='Кондиционер'>
                                    </a>
                                    <div class='item-description'>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                        </div>
                                        <a href='<?php echo home_url('/'); ?>product'>
                                            C&H CH-S07GKP8
                                            <div class='description-icons'>
                                                <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                     height="24.07"
                                                     viewBox="0 0 27 24.07">
                                                    <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                       transform="translate(1 -0.465)">
                                                        <path id="Контур_714" data-name="Контур 714"
                                                              d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                              fill="none" stroke="#6b92b0" stroke-width="2" />
                                                    </g>
                                                </svg>
                                                <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                     viewBox="0 0 512 512"
                                                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                            </div>
                                        </a>
                                        <p>
                                            Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                            XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                            фильтр Eco-fresh
                                        </p>
                                        <span class='price'>8 760 UAH</span>
                                        <div class='description-buttons'>
                                            <a href='#' class='btn'>Купить</a>
                                            <a href='#' class='btn btn-second'>В Корзину</a>
                                        </div>
                                    </div>
                                    <div class='item-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                            </div>
                            <div class='products-list '>
                                <div class='products-item catalog-item'>
                                    <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-22.jpg'
                                             alt='Кондиционер'>
                                    </a>
                                    <div class='item-description'>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                        </div>
                                        <a href='<?php echo home_url('/'); ?>product'>
                                            C&H CH-S07GKP8
                                            <div class='description-icons'>
                                                <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                     height="24.07"
                                                     viewBox="0 0 27 24.07">
                                                    <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                       transform="translate(1 -0.465)">
                                                        <path id="Контур_714" data-name="Контур 714"
                                                              d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                              fill="none" stroke="#6b92b0" stroke-width="2" />
                                                    </g>
                                                </svg>
                                                <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                     viewBox="0 0 512 512"
                                                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                            </div>
                                        </a>
                                        <p>
                                            Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                            XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                            фильтр Eco-fresh
                                        </p>
                                        <span class='price'>8 760 UAH</span>
                                        <div class='description-buttons'>
                                            <a href='#' class='btn'>Купить</a>
                                            <a href='#' class='btn btn-second'>В Корзину</a>
                                        </div>
                                    </div>
                                    <div class='item-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='products-item catalog-item'>
                                    <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-23.jpg'
                                             alt='Кондиционер'>
                                    </a>
                                    <div class='item-description'>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                        </div>
                                        <a href='<?php echo home_url('/'); ?>product'>
                                            C&H CH-S07GKP8
                                            <div class='description-icons'>
                                                <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                     height="24.07"
                                                     viewBox="0 0 27 24.07">
                                                    <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                       transform="translate(1 -0.465)">
                                                        <path id="Контур_714" data-name="Контур 714"
                                                              d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                              fill="none" stroke="#6b92b0" stroke-width="2" />
                                                    </g>
                                                </svg>
                                                <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                     viewBox="0 0 512 512"
                                                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                            </div>
                                        </a>
                                        <p>
                                            Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                            XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                            фильтр Eco-fresh
                                        </p>
                                        <span class='price'>8 760 UAH</span>
                                        <div class='description-buttons'>
                                            <a href='#' class='btn'>Купить</a>
                                            <a href='#' class='btn btn-second'>В Корзину</a>
                                        </div>
                                    </div>
                                    <div class='item-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='products-item catalog-item'>
                                    <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-18.jpg'
                                             alt='Кондиционер'>
                                    </a>
                                    <div class='item-description'>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                 width="14.137"
                                                 height="13.608"
                                                 viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                                            </svg>
                                        </div>
                                        <a href='<?php echo home_url('/'); ?>product'>
                                            C&H CH-S07GKP8
                                            <div class='description-icons'>
                                                <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                     height="24.07"
                                                     viewBox="0 0 27 24.07">
                                                    <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                       transform="translate(1 -0.465)">
                                                        <path id="Контур_714" data-name="Контур 714"
                                                              d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                              fill="none" stroke="#6b92b0" stroke-width="2" />
                                                    </g>
                                                </svg>
                                                <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                     viewBox="0 0 512 512"
                                                     xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                            </div>
                                        </a>
                                        <p>
                                            Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                            XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                            фильтр Eco-fresh
                                        </p>
                                        <span class='price'>8 760 UAH</span>
                                        <div class='description-buttons'>
                                            <a href='#' class='btn'>Купить</a>
                                            <a href='#' class='btn btn-second'>В Корзину</a>
                                        </div>
                                    </div>
                                    <div class='item-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id='info-reviews' class='info-list reviews'>
                        <h2>Мои отзывы</h2>
                        <div class='reviews-item'>
                            <div class='item-title'>
                                <h5>C&H CH-S07GKP8</h5>
                                <div class='rating'>
                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                         height="13.608"
                                         viewBox="0 0 14.137 13.608">
                                        <path id="Контур_2" data-name="Контур 2"
                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                    </svg>
                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                         height="13.608"
                                         viewBox="0 0 14.137 13.608">
                                        <path id="Контур_2" data-name="Контур 2"
                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                    </svg>
                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                         height="13.608"
                                         viewBox="0 0 14.137 13.608">
                                        <path id="Контур_2" data-name="Контур 2"
                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                    </svg>
                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                         height="13.608"
                                         viewBox="0 0 14.137 13.608">
                                        <path id="Контур_2" data-name="Контур 2"
                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                    </svg>
                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                         height="13.608"
                                         viewBox="0 0 14.137 13.608">
                                        <path id="Контур_2" data-name="Контур 2"
                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                    </svg>
                                </div>
                                <span class='data'>26.04.2021 в 18:10</span>
                            </div>
                            <div class='item-description'>
                                <p>
                                    Мы искали относительно недорогой, но качественный кондиционер и нашли подходящий
                                    здесь.
                                    Модель Грии, бесшумная и в режиме сна, он не мешает. Есть режим турбо, с помощью
                                    которого,
                                    можно быстро достичь нужной температуры. Рекомендую!
                                </p>
                            </div>
                        </div>
                        <div class='reviews-item'>
                            <div class='item-title'>
                                <h5>C&H CH-S07GKP8</h5>
                                <div class='rating'>
                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                         height="13.608"
                                         viewBox="0 0 14.137 13.608">
                                        <path id="Контур_2" data-name="Контур 2"
                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                    </svg>
                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                         height="13.608"
                                         viewBox="0 0 14.137 13.608">
                                        <path id="Контур_2" data-name="Контур 2"
                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                    </svg>
                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                         height="13.608"
                                         viewBox="0 0 14.137 13.608">
                                        <path id="Контур_2" data-name="Контур 2"
                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                    </svg>
                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                         height="13.608"
                                         viewBox="0 0 14.137 13.608">
                                        <path id="Контур_2" data-name="Контур 2"
                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                    </svg>
                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                         height="13.608"
                                         viewBox="0 0 14.137 13.608">
                                        <path id="Контур_2" data-name="Контур 2"
                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                    </svg>
                                </div>
                                <span class='data'>26.04.2021 в 18:10</span>
                            </div>
                            <div class='item-description'>
                                <p>
                                    Мы искали относительно недорогой, но качественный кондиционер и нашли подходящий
                                    здесь.
                                    Модель Грии, бесшумная и в режиме сна, он не мешает. Есть режим турбо, с помощью
                                    которого,
                                    можно быстро достичь нужной температуры. Рекомендую!
                                </p>
                            </div>
                        </div>
                        <div class='reviews-item'>
                            <div class='item-title'>
                                <h5>C&H CH-S07GKP8</h5>
                                <div class='rating'>
                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                         height="13.608"
                                         viewBox="0 0 14.137 13.608">
                                        <path id="Контур_2" data-name="Контур 2"
                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                    </svg>
                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                         height="13.608"
                                         viewBox="0 0 14.137 13.608">
                                        <path id="Контур_2" data-name="Контур 2"
                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                    </svg>
                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                         height="13.608"
                                         viewBox="0 0 14.137 13.608">
                                        <path id="Контур_2" data-name="Контур 2"
                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                    </svg>
                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                         height="13.608"
                                         viewBox="0 0 14.137 13.608">
                                        <path id="Контур_2" data-name="Контур 2"
                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                    </svg>
                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                         height="13.608"
                                         viewBox="0 0 14.137 13.608">
                                        <path id="Контур_2" data-name="Контур 2"
                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                    </svg>
                                </div>
                                <span class='data'>26.04.2021 в 18:10</span>
                            </div>
                            <div class='item-description'>
                                <p>
                                    Мы искали относительно недорогой, но качественный кондиционер и нашли подходящий
                                    здесь.
                                    Модель Грии, бесшумная и в режиме сна, он не мешает. Есть режим турбо, с помощью
                                    которого,
                                    можно быстро достичь нужной температуры. Рекомендую!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

<?php
    // Get orders
    $args = [];
    $orders = wc_get_orders($args);

    foreach ($orders as $order) {
        $date_modified = $order->get_date_modified();
        $price = number_format($order->get_total(), 0, '', ' ');
        ?>
        <div class='info-item ordering-item'>
            <span class='arrow'></span>
            <div class='item-image'>
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-4.jpg'
                     alt='кондиционер'>
            </div>
            <div class='item-description'>
                <div class='order-number'>
                    <?php echo sprintf('<span>№ %s от %s</span>',
                        $order->get_order_number(),
                        $date_modified->date("d.m.y о g:i")
                    ); ?>
                    <p class='order-status'>Статус: <span class='order-status'>
                            <?php echo $order->get_status() ?>
                        </span>
                    </p>
                </div>
                <div class='order-price'>
                    <span>Сумма заказа</span>
                    <p><?php echo $price ?> UAH</p>
                </div>
            </div>
            <div class='order-history'>
                <div class='order-history-left'>
                    <h5>Информация о заказе</h5>
                    <ul>
                        <li>
                            Номер заказа: <span><?php echo $order->get_order_number() ?></span>
                        </li>
                        <li>
                            ФИО:
                            <span>
                                <?php echo $order->get_billing_first_name() ?>
                                <?php echo $order->get_billing_last_name() ?>
                            </span>
                        </li>
                        <li>
                            Телефон:
                            <span><?php echo $order->get_billing_phone() ?></span>
                        </li>
                        <li>
                            Email:
                            <span><?php echo $order->get_billing_email() ?></span>
                        </li>
                        <li>
                            Адрес: <span><?php echo $order->get_billing_address_1() ?></span>
                        </li>
                        <li>
                            Требуется установка: <span><?php echo '????????????' ?></span>
                        </li>
                        <li>
                            Дополнительная информация: <span><?php echo '????????????' ?></span>
                        </li>
                    </ul>
                </div>
                <div class='order-history-right'>
                    <div class='order-data'>
                        <div class='product-image'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-5.jpg'
                                 alt='Кондиционер'>
                        </div>
                        <div class='data-title'>
                            <h5>C&H CH-S07GKP8</h5>
                            <span class='data-title-price'>Цена: <span>8 760 UAH</span></span>
                        </div>
                        <div class='data-amount'>
                            <span>Количество</span>
                            <p>1</p>
                        </div>
                        <div class='data-price'>
                            <span>Сумма заказа</span>
                            <p>8 760 UAH</p>
                        </div>
                    </div>
                    <div class='order-delivery'>
                        <div class='delivery-item'>
                            <span>Способ Оплаты:</span>
                            <p><?php echo '????????????' ?></p>
                        </div>
                        <div class='delivery-item'>
                            <span>Сервис Доставки</span>
                            <p><?php echo '????????????' ?></p>
                        </div>
                        <div class='delivery-item'>
                            <span>Вместе</span>
                            <span class='price'><?php echo $price ?> UAH</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>



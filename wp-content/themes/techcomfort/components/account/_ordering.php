<?php
    // Get orders
    $args = [];
    $orders = wc_get_orders($args);

    foreach ($orders as $order) {
        $date_modified = $order->get_date_modified();
        $price = number_format($order->get_total(), 0, '', ' ');
        $items = $order->get_items();
        $_product = wc_get_product(array_values($items)[0]['product_id']);
        ?>
        <div class='info-item ordering-item'>
            <span class='arrow'></span>
            <div class='item-image'>
                <?php if ($_product) echo $_product->get_image('180') ?>
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
                        <?php if ($order->get_billing_address_1()) { ?>
                            <li>
                                Адрес: <span><?php echo $order->get_billing_address_1() ?></span>
                            </li>
                        <?php } ?>
                        <li>
                            Требуется установка: <span><?php echo get_field('order_installation', $order->get_id()) ?></span>
                        </li>
                        <?php if (get_field('order_additional_information', $order->get_id())) { ?>
                            <li>
                                Дополнительная информация:
                                <span><?php echo get_field('order_additional_information', $order->get_id()) ?></span>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class='order-history-right'>
                    <?php
                        foreach ($order->get_items() as $item) {
                            $priceItemTotal = number_format($item->get_total(), 0, '', ' ');
                            $priceItem = number_format(($item->get_total() / $item->get_quantity()), 0, '', ' ');
                            $_product = wc_get_product($item['product_id']); ?>
                            <div class='order-data'>
                                <div class='product-image'>
                                    <?php echo $_product->get_image('180') ?>
                                </div>
                                <div class='data-title'>
                                    <h5><?php echo $item->get_name(); ?></h5>
                                    <span class='data-title-price'>Цена: <span><?php echo $priceItem; ?> UAH</span></span>
                                </div>
                                <div class='data-amount'>
                                    <span>Количество</span>
                                    <p><?php echo $item->get_quantity(); ?></p>
                                </div>
                                <div class='data-price'>
                                    <span>Сумма заказа</span>
                                    <p><?php echo $priceItemTotal; ?> UAH</p>
                                </div>
                            </div>
                        <?php } ?>
                    <div class='order-delivery'>
                        <div class='delivery-item'>
                            <span>Способ Оплаты</span>
                            <p><?php echo get_field('order_payment', $order->get_id()) ?></p>
                        </div>
                        <div class='delivery-item'>
                            <span>Сервис Доставки</span>
                            <p><?php echo get_field('order_delivery', $order->get_id()) ?></p>
                            <p><?php echo get_field('order_delivery_address', $order->get_id()) ?></p>
                            <p><?php echo get_field('order_delivery_mail', $order->get_id()) ?></p>
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



<?php
    // Get orders
    $args = [];
    $orders = wc_get_orders($args);

    foreach ($orders as $order) {

        $date_modified = $order->get_date_modified();
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
                    <p>Статус: <span class='order-status'>
                            <?php echo $order->get_status() ?>
                        </span>
                    </p>
                </div>
                <div class='order-price'>
                    <span>сумма заказа</span>
                    <p><?php echo $order->get_total() ?> UAH</p>
                </div>
            </div>
            <div class='order-history'>
                <div class='order-history-left'>
                    <h5>История заказа</h5>
                    <p>Информация о заказе</p>
                    <ul>
                        <li>THH 20450405247481</li>
                        <li>Доставка курьером по Киеву</li>
                        <li>Киевская обл., Печерский р-н., Печерск, Генерала Алмазова ул.,
                            кв.145
                        </li>
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
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>



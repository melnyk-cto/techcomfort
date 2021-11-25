<?php /* Template Name: Page - Payment And Delivery */ ?>
<?php get_header(); ?>
<main class='payment-and-delivery'>
    <section class='payment'>
        <div class='container'>
            <h2>Оплата</h2>
            <div class='payment-and-delivery-list'>
                <div class='payment-and-delivery-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/wallet.svg'
                             alt='Wallet'>
                    </div>
                    <div class='item-description'>
                        <h4>Оплата наличными</h4>
                        <p>
                            Товар можно оплатить наличными в день его доставки по указанному адресу (по Киеву). Если
                            товар приобретается вместе с работами по установке, то расчет производится по факту монтажа
                            с представителем монтажной бригады.
                        </p>
                    </div>
                </div>
                <div class='payment-and-delivery-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/card.svg' alt='Card'>
                    </div>
                    <div class='item-description'>
                        <h4>Оплата картой</h4>
                        <p>
                            Оплата на карту Приват банка, Монобанка. (номер карты и сумма к уплате за покупку будет
                            выслана Вам СМС).
                        </p>
                    </div>
                </div>
                <div class='payment-and-delivery-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/truck.svg' alt='Truck'>
                    </div>
                    <div class='item-description'>
                        <h4>Оплата при получении в службах доставки</h4>
                        <p>
                            Товар можно оплатить во время получения товара в отделениях службы доставки («Нова почта»,
                            «Деливери» и другие).
                        </p>
                    </div>
                </div>
                <div class='payment-and-delivery-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/money.svg' alt='Money'>
                    </div>
                    <div class='item-description'>
                        <h4>Оплата по безналичному расчету (НДС)</h4>
                        <p>
                            Юридическим лицам можно оплатить заказ на расчетный счет с НДС. Производится 100%
                            предоплата.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='delivery'>
        <div class='container'>
            <h2>Доставка</h2>
            <div class='payment-and-delivery-list'>
                <div class='payment-and-delivery-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/building.svg'
                             alt='building'>
                    </div>
                    <div class='item-description'>
                        <h4>Доставка курьером по Киеву</h4>
                        <p>
                            Доставка по Киеву бесплатно (до подъезда). Стоимость подъёма без лифта, при необходимости 20
                            грн. за этаж.
                        </p>
                    </div>
                </div>
                <div class='payment-and-delivery-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/home.svg' alt='house'>
                    </div>
                    <div class='item-description'>
                        <h4>Доставка в пригород Киева</h4>
                        <p>
                            Доставка в пригород Киева рассчитывается 9 грн. за один километр, при этом учитывается
                            расстояние от границы Киева до места доставки.
                        </p>
                    </div>
                </div>
                <div class='payment-and-delivery-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/ukraine.svg'
                             alt='Ukraine map'>
                    </div>
                    <div class='item-description'>
                        <h4>Доставка по Украине</h4>
                        <p>
                            Заказанный Вами товар может быть доставлен в любой населенный пункт Украины. Доставка
                            осуществляется службами доставки «Нова почта», «Деливери» и другие. Стоимость доставки
                            расчитывается по тарифам перевозчика
                        </p>
                    </div>
                </div>
            </div>
            <div class='delivery-description'>
                <div class='guarantee'>
                    <h3>Гарантия</h3>
                    <p>
                        На все товары распространяется гарантия, сроки гарантии зависят от сервисной политики
                        производителя или импортёра в нашей стране.
                    </p>
                </div>
                <div class='purchase-returns'>
                    <h3>Возврат товара</h3>
                    <p>
                        Согласно закона "О защите прав потребителей" возврат и обмен товара надлежащего качества
                        осуществляется в течение 14 дней с момента покупки, при условии наличия чека, неповрежденной
                        упаковки и сохранения внешнего вида.
                    </p>
                    <p>Покупатель оплачивает возврат товара за свой счет</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

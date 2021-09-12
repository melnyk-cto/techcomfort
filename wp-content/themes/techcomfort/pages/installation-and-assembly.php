<?php /* Template Name: Page - Installation And Assembly */ ?>
<?php get_header(); ?>
<main class='installation-and-assembly'>
    <div class='popup basket'>
        <div class='popup-inner basket-inner'>
            <div class='popup-title basket-title'>
                <h2>Корзина</h2>
                <div class='basket-close close'></div>
            </div>
            <div class='basket-list'>
                <h4 class='no-products'>Корзина пуста</h4>
                <div class='basket-item'>
                    <div class='item-close'></div>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-1.jpg'
                             alt='Кондиционер'>
                    </div>
                    <div class='item-description'>
                        <h5>C&H CH-S07GKP8</h5>
                        <div class='quantity'>
                            <button type='button' class='reduce'>-</button>
                            <label>
                                <input type='text' value='1' class='quantity-input'>
                            </label>
                            <button type='button' class='enlarge'>+</button>
                        </div>
                        <span>66 500 UAH</span>
                    </div>
                </div>
                <div class='basket-item'>
                    <div class='item-close'></div>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-2.jpg'
                             alt='Кондиционер'>
                    </div>
                    <div class='item-description'>
                        <h5>C&H CH-S07GKP8</h5>
                        <div class='quantity'>
                            <button type='button' class='reduce'>-</button>
                            <label>
                                <input type='text' value='1' class='quantity-input'>
                            </label>
                            <button type='button' class='enlarge'>+</button>
                        </div>
                        <span>66 500 UAH</span>
                    </div>
                </div>
                <div class='basket-item'>
                    <div class='item-close'></div>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-3.jpg'
                             alt='Кондиционер'>
                    </div>
                    <div class='item-description'>
                        <h5>C&H CH-S07GKP8</h5>
                        <div class='quantity'>
                            <button type='button' class='reduce'>-</button>
                            <label>
                                <input type='text' value='1' class='quantity-input'>
                            </label>
                            <button type='button' class='enlarge'>+</button>
                        </div>
                        <span>66 500 UAH</span>
                    </div>
                </div>
            </div>
            <div class='basket-bottom'>
                <div class='basket-bottom-description'>
                    <p>
                        Доставка:
                        <span>0 UAH</span>
                    </p>
                    <p>
                        Сумма товара:
                        <span>66 500 UAH</span>
                    </p>
                </div>
                <a href='#' class='btn'>Заказать</a>
            </div>
        </div>
    </div>
    <div class='popup login'>
        <div class='popup-inner login-inner'>
            <div class='popup-title login-title'>
                <h2>Вход</h2>
                <div class='login-close close'></div>
            </div>
            <div class='popup-content login-content'>
                <form action=''>
                    <label for=''>
                        <span>Эл. почта или телефон</span>
                        <input type='tel'>
                    </label>
                    <label for=''>
                        <span>Пароль</span>
                        <input type='password'>
                    </label>
                    <div class='checkbox'>
                        <label>
                            <input type='checkbox'>
                            Запомнить меня
                        </label>
                        <a href='#' class='forgot-password'>Напомнить пароль</a>
                    </div>
                    <a href='#' class='btn'>Войти</a>
                    <p class='register-now'>Зарегистрироваться</p>
                </form>
            </div>
        </div>
    </div>
    <div class='popup registration'>
        <div class='popup-inner registration-inner'>
            <div class='popup-title registration-title'>
                <h2>Регистрация</h2>
                <div class='registration-close close'></div>
            </div>
            <div class='popup-content registration-content'>
                <form action=''>
                    <label>
                        <span>Имя</span>
                        <input type='text'>
                    </label>
                    <label>
                        <span>Фамилия</span>
                        <input type='text'>
                    </label>
                    <label>
                        <span>Номер телефона</span>
                        <input type='tel'>
                    </label>
                    <label>
                        <span>Эл. почта</span>
                        <input type='email'>
                    </label>
                    <label>
                        <span>Пароль</span>
                        <input type='password'>
                    </label>
                    <label>
                        <span>Повторите пароль</span>
                        <input type='password'>
                    </label>
                    <div class='checkbox'>
                        <label>
                            <input type='checkbox'>
                            Регистрируясь, вы соглашаетесь с пользовательским соглашением
                        </label>
                    </div>
                    <a href='#' class='btn'>Зарегистрировать</a>
                    <p class='registered'>Я уже зарегистрирован</p>
                </form>
            </div>
        </div>
    </div>
    <section class='assembly'>
        <div class='container'>
            <div class='services-content'>
                <div class='services-list'>
                    <h2>Цены на монтаж кондиционеров настенного типа до 3-х м/п магистрали</h2>
                    <div class='services-list-title'>
                        <span>Виды работ</span>
                        <span>Цена, грн</span>
                    </div>
                    <div class='services-list-inner'>
                        <div class='services-item'>
                            <p>Стандартный монтаж кондиционера 07-09</p>
                            <span>2500</span>
                        </div>
                        <div class='services-item'>
                            <p>Стандартный монтаж кондиционера 12-16</p>
                            <span>2600</span>
                        </div>
                        <div class='services-item'>
                            <p>Стандартный монтаж кондиционера 18-21</p>
                            <span>3000</span>
                        </div>
                        <div class='services-item'>
                            <p>Стандартный монтаж кондиционера 22-24</p>
                            <span>3600</span>
                        </div>
                        <div class='services-item'>
                            <p>Стандартный монтаж кондиционера 28-36</p>
                            <span>4200</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class='services-content'>
                <div class='services-list'>
                    <h2>Цены на монтаж канальных, кассетных и консольных кондиционеров до 3-х м/п магистрали</h2>
                    <div class='services-list-title'>
                        <span>Виды работ</span>
                        <span>Цена, грн</span>
                    </div>
                    <div class='services-list-inner'>
                        <div class='services-item'>
                            <p>Стандартный монтаж канального, кассетного, консольного кондиционера 12-24</p>
                            <span>5000</span>
                        </div>
                        <div class='services-item'>
                            <p>Стандартный монтаж канального, кассетного, консольного кондиционера 30-36</p>
                            <span>6000</span>
                        </div>
                        <div class='services-item'>
                            <p>Стандартный монтаж канального, кассетного, консольного кондиционера 48-60</p>
                            <span>7000</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class='services-content'>
                <div class='services-list'>
                    <h2>Дополнительные расходные материалы и монтажные работы за 1м/п</h2>
                    <div class='services-list-title'>
                        <span>Материалы и работа</span>
                        <span>Цена, грн</span>
                    </div>
                    <div class='services-list-inner'>
                        <div class='services-item'>
                            <p>Фреоновая магистраль 07-09</p>
                            <span>450</span>
                        </div>
                        <div class='services-item'>
                            <p>Фреоновая магистраль 12-18</p>
                            <span>500</span>
                        </div>
                        <div class='services-item'>
                            <p>Фреоновая магистраль 24-30</p>
                            <span>600</span>
                        </div>
                        <div class='services-item'>
                            <p>Дренажная система</p>
                            <span>50</span>
                        </div>
                        <div class='services-item'>
                            <p>Удлинение электрокабеля</p>
                            <span>50</span>
                        </div>
                        <div class='services-item'>
                            <p>Электровилка за шт.</p>
                            <span>50</span>
                        </div>
                        <div class='services-item'>
                            <p>Кронштейны из нержавеющей стали за пару к1</p>
                            <span>400</span>
                        </div>
                        <div class='services-item'>
                            <p>Короб 60х40 мм</p>
                            <span>150</span>
                        </div>
                        <div class='services-item'>
                            <p>Короб 20х20 мм</p>
                            <span>100</span>
                        </div>
                        <div class='services-item'>
                            <p>Дополнительный крепёж за шт.</p>
                            <span>50</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class='services-content'>
                <div class='services-list'>
                    <h2>Стоимость работ по штроблению за 1м/п</h2>
                    <div class='services-list-title'>
                        <span>Виды работ</span>
                        <span>Цена, грн</span>
                    </div>
                    <div class='services-list-inner'>
                        <div class='services-item'>
                            <p>Штробление под фреоновую магистраль в кирпиче</p>
                            <span>150</span>
                        </div>
                        <div class='services-item'>
                            <p>Штробление под фреоновую магистраль в бетоне</p>
                            <span>200</span>
                        </div>
                        <div class='services-item'>
                            <p>Штробление под фреоновую магистраль армированном бетоне</p>
                            <span>250</span>
                        </div>
                        <div class='services-item'>
                            <p>Штробление под фреоновую магистраль в пеноблоке</p>
                            <span>120</span>
                        </div>
                        <div class='services-item'>
                            <p>Штробление под фреоновую магистраль в гипсокартоне</p>
                            <span>60</span>
                        </div>
                        <div class='services-item'>
                            <p>Штробление под кабель или дренаж в бетоне</p>
                            <span>150</span>
                        </div>
                        <div class='services-item'>
                            <p>Штробление под кабель или дренаж в кирпиче</p>
                            <span>100</span>
                        </div>
                        <div class='services-item'>
                            <p>Штробление под фреоновую магистраль в утеплителе (пенопласт и т.п.)</p>
                            <span>50</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class='services-content'>
                <div class='services-list'>
                    <h2>Другие дополнительные услуги</h2>
                    <div class='services-list-title'>
                        <span>Виды работ</span>
                        <span>Цена, грн</span>
                    </div>
                    <div class='services-list-inner'>
                        <div class='services-item'>
                            <p>Снятие и установка стеклопакета за кв. м</p>
                            <span>от 200</span>
                        </div>
                        <div class='services-item'>
                            <p>Установка с лестницы за этаж</p>
                            <span>от 200</span>
                        </div>
                        <div class='services-item'>
                            <p>Дополнительное отверстие в комнатной перегородке бетон</p>
                            <span>от 70</span>
                        </div>
                        <div class='services-item'>
                            <p>Дополнительное отверстие в комнатной перегородке кирпич</p>
                            <span>от 50</span>
                        </div>
                        <div class='services-item'>
                            <p>Дополнительное отверстие в капитальной стене бетон до 50 см.</p>
                            <span>от 100</span>
                        </div>
                        <div class='services-item'>
                            <p>Дополнительное отверстие в капитальной стене кирпич до 50 см.</p>
                            <span>от 70</span>
                        </div>
                        <div class='services-item'>
                            <p>Прокладка магистрали по потолку за м/п.</p>
                            <span>от 30</span>
                        </div>
                        <div class='services-item'>
                            <p>Установка европрофиля за м/п.</p>
                            <span>150</span>
                        </div>
                        <div class='services-item'>
                            <p>Установка наружного блока в корзину</p>
                            <span>300</span>
                        </div>
                        <div class='services-item'>
                            <p>Установка наружного блока с вышки (вышка заказчика)</p>
                            <span>500</span>
                        </div>
                        <div class='services-item'>
                            <p>Установка наружного блока справа от окна</p>
                            <span>250</span>
                        </div>
                        <div class='services-item'>
                            <p>Разборка и зборка подвесного потолка Армстронг за кв. м</p>
                            <span>от 100</span>
                        </div>
                        <div class='services-item'>
                            <p>Разборка и сборка вагонки за кв. м</p>
                            <span>от 100</span>
                        </div>
                        <div class='services-item'>
                            <p>Разборка и сборка фасадной плитки за кв. м</p>
                            <span>от 150</span>
                        </div>
                        <div class='services-item'>
                            <p>Установка дренажного насоса</p>
                            <span>от 500</span>
                        </div>
                        <div class='services-item'>
                            <p>Установка сифона</p>
                            <span>от 600</span>
                        </div>
                        <div class='services-item'>
                            <p>Сервисный выезд (Диагностика)</p>
                            <span>от 400</span>
                        </div>
                        <div class='services-item'>
                            <p>Подъем без лифта за этаж</p>
                            <span>от 20</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class='services-content'>
                <div class='services-list'>
                    <h2>Стоимость демонтажных и монтажных работ внутренних и внешних блоков</h2>
                    <div class='services-list-title'>
                        <span>Виды работ</span>
                        <span>Цена, грн</span>
                    </div>
                    <div class='services-list-inner'>
                        <div class='services-item'>
                            <p>Демонтаж внутреннего блока 07-12</p>
                            <span>от 400</span>
                        </div>
                        <div class='services-item'>
                            <p>Демонтаж внутреннего блока 18-24</p>
                            <span>от 700</span>
                        </div>
                        <div class='services-item'>
                            <p>Демонтаж внутреннего блока 28-36</p>
                            <span>от 800</span>
                        </div>
                        <div class='services-item'>
                            <p>Монтаж внутреннего блока 07-12</p>
                            <span>от 600</span>
                        </div>
                        <div class='services-item'>
                            <p>Монтаж внутреннего блока 18-24</p>
                            <span>от 700</span>
                        </div>
                        <div class='services-item'>
                            <p>Монтаж внутреннего блока 28-36</p>
                            <span>от 900</span>
                        </div>
                        <div class='services-item'>
                            <p>Демонтаж наружного блока 07-12</p>
                            <span>от 600</span>
                        </div>
                        <div class='services-item'>
                            <p>Демонтаж наружного блока 18-24</p>
                            <span>от 1000</span>
                        </div>
                        <div class='services-item'>
                            <p>Демонтаж наружного блока 28-36</p>
                            <span>от 1500</span>
                        </div>
                        <div class='services-item'>
                            <p>Монтаж наружного блока 07-12</p>
                            <span>от 600</span>
                        </div>
                        <div class='services-item'>
                            <p>Монтаж наружного блока 18-24</p>
                            <span>от 1200</span>
                        </div>
                        <div class='services-item'>
                            <p>Монтаж наружного блока 28-36</p>
                            <span>от 1500</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='installation'>
        <div class='container'>
            <div class='installation-inner'>
                <div class='installation-description'>
                    <h2>Установка</h2>
                    <p>Установка кондиционеров в Киеве: последовательность действий при заказе</p>
                    <p>
                        Заказывать услуги в нашей компании для Вас легко и просто, так как во главу угла мы ставим
                        качество сервиса и доступность цен. Установка кондиционеров в Киеве компанией «Техкомфорт»
                        производится быстро и с гарантией качества вне зависимости от того был он куплен в нашем
                        магазине или нет.
                    </p>
                    <span class='more'>Подробнее</span>
                </div>
                <div class='installation-image'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/installation-image.jpg'
                         alt='Установка кондиционера'>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

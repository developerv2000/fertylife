<section class="order" id="order">
    <div class="order__inner main-container">
        {{-- Different colors for laptop & tablet, mobile devices --}}
        <div class="divider">
            <picture class="divider__picture">
                <source srcset="{{ asset('img/main/red-divider.svg') }}" media="(max-width: 1279px)">
                <img class="divider__image" src="{{ asset('img/main/blue-divider.svg') }}" alt="divider">
            </picture>
        </div>

        <div class="order__title-order-wrapper"> {{-- For table & mobile border --}}
            <h2 class="order__title main-title secondary-color">Закажите Фертилайф и Фертивита сегодня и сделайте первый шаг к вашей мечте!</h2>

            <div class="order__offer">
                <h5 class="order__offer-title secondary-title">Специальное предложение:</h5>
                <p class="order__offer-text">При покупке Фертилайф и Фертивита одновременно скидка 10%!
                    <br> Не упустите шанс стать счастливыми родителями!
                </p>
            </div>
        </div>

        <div class="order__images-wrapper">
            <img class="order__image-1 order__image--blured" src="{{ asset('img/home/fertilife.png') }}" alt="Фертилайф">
            <img class="order__image-2 order__image--focused" src="{{ asset('img/home/fertivita.png') }}" alt="Фертивита">
        </div>

        <div class="order__links">
            <h5 class="order__links-title secondary-title">Закажите Фертилайф и Фертивита уже сейчас!</h5>

            <div class="order__links-row">
                <a class="order__links-button main-button" href="https://salomat.tj" target="_blank">Заказать</a>

                <a class="order__links-button main-button main-button--iconed" href="https://salomat.tj" target="_blank">
                    <img class="order__links-button-icon" src="{{ asset('img/home/order-icon.svg') }}" alt="order">
                </a>
            </div>
        </div>
    </div>
</section>

<div class="plan" id="plan">
    <div class="plan__inner main-container">
        <x-divider color="red" />

        {{-- Row --}}
        <div class="plan__row">
            <div class="plan__calendar-wrapper">
                <div class="plan__calendar-red-ellipse"></div>
                <img class="plan__calendar" src="img/home/plan-calendar.svg" alt="calendar">
            </div>

            <div class="plan__text-wrapper">
                <p class="plan__text">
                    <strong>Планирование беременности –</strong><br>
                    это важный этап в жизни каждой семьи.<br><br>
                    Хотите сделать этот этап максимально комфортным и повысить шансы на зачатие здорового
                    ребенка?
                </p>
            </div>
        </div>

        {{-- Foot --}}
        <div class="plan__foot">
            <h2 class="plan__foot-title main-title">Представляем вам уникальный дуэт – </h2>

            <div class="plan__foot-cards-wrapper">
                <div class="plan__foot-cards">
                    <x-main-card
                        image-src="img/main/fertilife-icon.svg"
                        title="Фертилайф"
                        subtitle="для мужчин" />

                    <x-main-card
                        class="secondary-color"
                        image-src="img/main/fertivita-icon.svg"
                        title="Фертивита"
                        subtitle="для женщин" />
                </div>

                <img class="plan__foot-cards-heart" src="img/home/plan-heart.png" alt="heart">
            </div>
        </div>
    </div>
</div>

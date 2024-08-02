<footer class="footer">
    <img class="footer__divider" src="{{ asset('img/main/grey-divider.svg') }}" alt="divider">

    <div class="footer__inner main-container">
        <div class="footer__row">
            {{-- Footer Left --}}
            <div class="footer__side footer__side--left">
                <h6 class="footer__title">Организация, уполномоченная принимать претензии от потребителей:</h6>

                <a class="footer__link footer__link--address" href="https://google.maps" target="_blank">
                    <p class="footer__text">ТОО «Cepheus Medical» (Цефей Медикал),</p>
                    <p class="footer__text">050045, РК, г. Алматы, пр-т Аль-Фараби, дом 7, </p>
                    <p class="footer__text">ЖК «Нурлы Тау», блок 5А, офис 247.</p>
                </a>

                <a class="footer__link" href="tel:+77273006961" target="_blank">
                    <p class="footer__text">тел: +7 (727) 300 69 71</p>
                </a>

                <a class="footer__link" href="mailto:cepheusmedical@gmail.com" target="_blank">
                    <p class="footer__text">e-mail: cepheusmedical@gmail.com</p>
                </a>
            </div>

            {{-- Footer Right --}}
            <div class="footer__side footer__side--right">
                <h6 class="footer__title">Держатель свидетельства о государственной регистрации (СГР):</h6>
                <p class="footer__text">SPEY MEDICAL Ltd,</p>
                <p class="footer__text">Lynton House 7-12 Tavistock Square, WC1H 9LT</p>
                <p class="footer__text">Лондон, Великобритания</p>

                <div class="footer__albion">
                    <p class="footer__albion-text">Albion ™ является товарным знаком Balchem Corp. или Albion Labs.</p>
                    <img class="footer__albion-logo" src="{{ asset('img/main/albion-logo.svg') }}" alt="albion">
                </div>
            </div>
        </div>
    </div>

    <!-- Fixed notification -->
    <div class="fixed-notification">
        <!-- Bad Notification -->
        <div class="notification">
            <div class="notification__inner">
                <h5 class="notification__title">БИОЛОГИЧЕСКИ АКТИВНАЯ ДОБАВКА К ПИЩЕ. НЕ ЯВЛЯЕТСЯ ЛЕКАРСТВОМ.</h5>
                <p class="notification__text">Перед применением препарата необходимо ознакомиться с инструкцией
                    по применению.</p>
            </div>
        </div>

        <!-- Scroll Top -->
        <div class="scroll-top">
            <svg viewBox="0 0 46 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 68C20 69.6569 21.3431 71 23 71C24.6569 71 26 69.6569 26 68H20ZM25.1213 1.37868C23.9497 0.207107 22.0503 0.207107 20.8787 1.37868L1.7868 20.4706C0.615224 21.6421 0.615224 23.5416 1.7868 24.7132C2.95837 25.8848 4.85786 25.8848 6.02944 24.7132L23 7.74264L39.9706 24.7132C41.1421 25.8848 43.0416 25.8848 44.2132 24.7132C45.3848 23.5416 45.3848 21.6421 44.2132 20.4706L25.1213 1.37868ZM26 68L26 3.5H20L20 68H26Z"
                    fill="#005F96" fill-opacity="0.3" />
            </svg>
        </div>
    </div>
</footer>

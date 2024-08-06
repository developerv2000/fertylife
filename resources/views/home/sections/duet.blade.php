<section class="duet" id="duet">
    <div class="duet__inner main-container">
        <x-divider color="blue" />

        <img class="duet__joined-icons" src="{{ asset('img/home/duet-joined-icons.png') }}" alt="Фертивита и Фертилайф">

        {{-- Leftside --}}
        <div class="duet__side duet__side--left">
            <div class="duet__side-box"> {{-- For tablet and mobile container width limiter. Acts like a main container --}}
                <div class="duet__side-box-inner"> {{-- For tablet and mobile border --}}
                    <div class="duet__side-head-andvantages-wrapper"> {{-- for laptop border --}}

                        {{-- Leftside header --}}
                        <div class="duet__side-header">
                            <img class="duet__pack" src="{{ asset('img/home/fertilife-pack.png') }}" alt="Фертилайф упаковка">
                            <div class="duet__ellipse"></div>
                            <h3 class="duet__title">Фертилайф</h3>

                            <div class="model-viewer-wrapper">
                                <model-viewer
                                    class="model-viewer"
                                    id="fertilife"
                                    src="{{ asset('glbs/fertilife.glb') }}"
                                    alt="Фертилайф model"
                                    camera-controls ar ar-modes="webxr scene-viewer quick-look"
                                    ar-scale="fixed">
                                </model-viewer>
                            </div>
                        </div> {{-- Leftside header --}}

                        {{-- Leftside advantages --}}
                        <div class="duet__advantages-wrapper">
                            {{-- Visible only on tablet and mobile --}}
                            <img class="duet__side-icons" src="{{ asset('img/home/duet-fertilife-icon.png') }}" alt="Фертилайф">

                            <div class="duet__advantage">
                                <h4 class="duet__advantage-title secondary-title">Улучшает качество спермы:</h4>

                                <ul class="duet__advantage-list main-list">
                                    <li class="main-list__li"><strong>✓</strong> Повышает подвижность сперматозоидов;
                                    </li>
                                    <li class="main-list__li"><strong>✓</strong> Увеличивает количество сперматозоидов;
                                    </li>
                                    <li class="main-list__li"><strong>✓</strong> Улучшает морфологию сперматозоидов;
                                    </li>
                                </ul>
                            </div>

                            <div class="duet__advantage">
                                <h4 class="duet__advantage-title secondary-title">Нормализует гормональный фон:</h4>

                                <ul class="duet__advantage-list main-list">
                                    <li class="main-list__li"><strong>✓</strong> Повышает уровень тестостерона;</li>
                                    <li class="main-list__li"><strong>✓</strong> Снижает уровень эстрогена;</li>
                                    <li class="main-list__li"><strong>✓</strong> Улучшает работу щитовидной железы.</li>
                                </ul>
                            </div>

                            <div class="duet__advantage">
                                <h4 class="duet__advantage-title secondary-title">Повышает либидо и потенцию.</h4>
                            </div>

                            <div class="duet__advantage">
                                <h4 class="duet__advantage-title secondary-title">Укрепляет иммунитет.</h4>
                            </div>
                        </div> {{-- Leftside advantages --}}
                    </div> {{-- Leftside head and advantages wrapper --}}

                    {{-- Instruction --}}
                    <x-main-card
                        class="duet__side-instruction main-color"
                        href="/instructions/fertilife.pdf"
                        target="blank"
                        image-src="img/main/fertilife-icon.svg"
                        subtitle="Скачать инструкцию" />

                </div> {{-- Box inner --}}
            </div> {{-- Box --}}
        </div> {{-- Leftside --}}


        {{-- Rightside --}}
        <div class="duet__side duet__side--right">
            {{-- Visible only on tablet and mobile devices --}}
            <div class="divider">
                <img class="divider__image" src="{{ asset('img/main/red-divider.svg') }}" alt="divider">
            </div>

            <div class="duet__side-box"> {{-- For tablet and mobile container width limiter. Acts like a main container --}}
                <div class="duet__side-box-inner"> {{-- For tablet and mobile border --}}
                    <div class="duet__side-head-andvantages-wrapper"> {{-- for laptop border --}}
                        {{-- Rightside header --}}
                        <div class="duet__side-header">
                            <img class="duet__pack" src="{{ asset('img/home/fertivita-pack.png') }}" alt="Фертивита упаковка">
                            <div class="duet__ellipse"></div>
                            <h3 class="duet__title">Фертивита</h3>

                            <div class="model-viewer-wrapper">
                                <model-viewer
                                    class="model-viewer"
                                    id="fertivita"
                                    src="{{ asset('glbs/fertivita.glb') }}"
                                    alt="Фертивита model"
                                    camera-controls ar ar-modes="webxr scene-viewer quick-look"
                                    ar-scale="fixed">
                                </model-viewer>
                            </div>
                        </div> {{-- Rightside header --}}

                        {{-- Rightside advantages --}}
                        <div class="duet__advantages-wrapper">
                            {{-- Visible only on tablet and mobile --}}
                            <img class="duet__side-icons" src="{{ asset('img/home/duet-fertivita-icon.png') }}" alt="Фертивита">

                            <div class="duet__advantage">
                                <h4 class="duet__advantage-title secondary-title">Нормализует менструальный цикл</h4>

                                <ul class="duet__advantage-list main-list">
                                    <li class="main-list__li"><strong>✓</strong> Регулирует овуляцию;</li>
                                    <li class="main-list__li"><strong>✓</strong> Уменьшает предменструальный синдром
                                        (ПМС)
                                    </li>
                                    <li class="main-list__li"><strong>✓</strong> Устраняет болезненные менструации.</li>
                                </ul>
                            </div>

                            <div class="duet__advantage">
                                <h4 class="duet__advantage-title secondary-title">Улучшает качество яйцеклеток:</h4>

                                <ul class="duet__advantage-list main-list">
                                    <li class="main-list__li"><strong>✓</strong> Повышает количество яйцеклеток;</li>
                                    <li class="main-list__li"><strong>✓</strong> Улучшает их созревание;</li>
                                    <li class="main-list__li"><strong>✓</strong> Снижает риск хромосомных аномалий.</li>
                                </ul>
                            </div>

                            <div class="duet__advantage">
                                <h4 class="duet__advantage-title secondary-title">Нормализует гормональный фон</h4>

                                <ul class="duet__advantage-list main-list">
                                    <li class="main-list__li"><strong>✓</strong> Повышает уровень прогестерона</li>
                                    <li class="main-list__li"><strong>✓</strong> Снижает уровень эстрогена;</li>
                                    <li class="main-list__li"><strong>✓</strong> Улучшает работу щитовидной железы.</li>
                                </ul>
                            </div>

                            <div class="duet__advantage">
                                <h4 class="duet__advantage-title secondary-title">Укрепляет иммунитет.</h4>
                            </div>
                        </div> {{-- Rightside advantages --}}
                    </div> {{-- Rightside head and advantages wrapper --}}

                    {{-- Instruction --}}
                    <x-main-card
                        class="duet__side-instruction secondary-color"
                        href="/instructions/fertivita.pdf"
                        target="blank"
                        image-src="img/main/fertivita-icon.svg"
                        subtitle="Скачать инструкцию" />
                </div> {{-- Box inner --}}
            </div> {{-- Box --}}
        </div> {{-- Rightside --}}
    </div>
</section>

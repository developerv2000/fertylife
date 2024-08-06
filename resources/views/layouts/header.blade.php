<header class="header">
    <div class="header__inner main-container">
        <a class="logo" href="/">
            <img class="logo__image" src="{{ asset('img/main/logo.svg') }}" alt="Spey logo">
        </a>

        <button class="navbar-toggler" data-click-action="toggle-collapse" data-collapse-selector=".navbar">
            <img class="navbar-toggler__icon navbar-toggler__icon--open" src="{{ asset('img/main/menu.svg') }}" alt="menu">
            <img class="navbar-toggler__icon navbar-toggler__icon--close" src="{{ asset('img/main/close.svg') }}" alt="close">
        </button>

        <nav class="navbar collapse">
            <div class="navbar__inner">
                <a class="navbar__link" href="#plan">Планирование</a>
                <a class="navbar__link" href="#duet">Для вас</a>
                <a class="navbar__link" href="#about">Комплекс</a>
                <a class="navbar__link" href="#order">Где купить</a>

                {{-- Only tablet and mobile devices --}}
                <div class="navbar__additional-links">
                    <a class="navbar__link" href="#">Инструкция</a>
                    <a class="navbar__link" href="{{ asset('/instructions/fertilife.pdf') }}">Фертилайф</a>
                    <a class="navbar__link" href="{{ asset('/instructions/fertivita.pdf') }}">Фертивита</a>
                </div>
            </div>
        </nav>
    </div>
</header>

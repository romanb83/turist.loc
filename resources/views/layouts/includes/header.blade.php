<header class="header-section">
    <div class="container-fluid">
        <div class="inner-header">
            <div class="logo">
                <a href="{{ route('welcome') }}"><img src="/img/logo.png" alt=""></a>
            </div>
            <div class="nav-right">
                @guest
                    <a href="{{ route('show.login.form') }}" class="primary-btn">Войти</a>
                @endguest
                @auth
                    <a href="{{ route('show.dashboard') }}"><i class="fa-solid fa-user fa-2x"></i></a>
                @endauth
            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li class="active"><a href="{{ route('show.cards') }}">Отели</a></li>
                    <li><a href="./blog.html">Популярное</a></li>
                    <li><a href="#">Россия</a>
                        <ul class="drop-menu">
                            <li><a href="about-us.html">Крым</a></li>
                            <li><a href="rooms.html">Кубань</a></li>
                            <li><a href="services.html">Абхазия</a></li>
                        </ul>
                    </li>
                    <li><a href="./blog.html">Новости</a></li>
                    <li><a href="./contact.html">Контакты</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>

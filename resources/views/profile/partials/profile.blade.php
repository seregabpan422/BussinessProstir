<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOMA</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon-16x16.png">
</head>
<body>
    <header>
        <div class="header-container">
        <div class="header-content">
            <div class="header-logo"><a href="{{route('main.page')}}">Бізнес Простір</a></div>
            <div class="header-nav">
                <li>
                    <ul class="header-nav-btn"> <a href="{{route('main.page')}}">Послуги</a></ul>
                    <ul class="header-nav-btn"><a href="{{route('catalog.page')}}">Каталог</a></ul>
                    <ul class="header-nav-btn"><a href="project.html">Проекти</a></ul>
                    <ul class="header-nav-btn"><a href="{{route('about-us')}}">Про нас</a></ul>
                   <!--  <ul class="header-nav-btn"><a href="">Контакти </a></ul> -->
                    
                </li>
            </div>
            <div class="header-phone">
                <a href="tel:+380985810334" class="phone-text"> Михайло +380985810334</a>
                <a href="tel:+380985810334"  class="phone-text">Сергій  +380985810334</a>
            </div>
            <div class="header-btn">
            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                               <p class="header-btn-text"> {{ __('Вийти') }}</p>
                            </x-dropdown-link>
                        </form></p></div>
        </div>
        </div>
    </header>
    <div class="cab">
        <div class="cab-container">
            <div class="cab-content">
                <div class="cab-profile">
                    <div class="cab-photo"><img src="../img/user/user.png" alt="" width="250px"></div>
                    <div class="cab-mail">{{Auth::user()->name}}</div>
                    <div class="cab-mail">{{Auth::user()->email}}</div>
                    <div class="cab-settings"><a href="{{route('settings-page', ['id' => Auth::user()->id])}}">{{__('Налаштування')}}</a></div>
                </div>
                <div class="cab-story">
                    <div class="cab-title"><p>Історія замовлень</p></div>
                    <div class="story-container"></div>
                @yield('story')
                <div class="admin-panel-cab">
                    @yield('admin-panel')
                </div>
            </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-info">
                    <p class="footer-text">Наша компанія займається розробкою комерційних рішень, вирішення проблем різної складності,<br> а також наданням консультацій відповідно до ваших вимог та побажань</p>
                </div>
                <div class="footer-contacts">
                    <p class="footer-text">Михайло 380985810334 <br>  Сергій 380985810334</p>
                    <div class="footer-text">seregabpan422@gmail.com</div>
                </div>
                <div class="footer-text">All right recieved</div>                
            </div>
        </div>
    </footer>
</body>
</html>
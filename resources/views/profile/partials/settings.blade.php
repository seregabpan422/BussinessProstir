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
                    <div class="cab-photo"><img src="..." alt=""></div>
                    <div class="cab-mail">{{Auth::user()->name}}</div>
                    <div class="cab-mail">{{Auth::user()->email}}</div>
                    <div class="cab-settings"><a href="{{route('cab-page', ['id' => Auth::user()->id])}}">{{__('Повернутися')}}</a></div>
                </div>
        @yield('edit')
            </div>
        </div>
    </div>
</body>
</html>
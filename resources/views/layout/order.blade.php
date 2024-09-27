<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bussiness Prostir</title>
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
<!--                     <ul class="header-nav-btn"><a href="">Контакти </a></ul> -->
                    
                </li>
            </div>
            <div class="header-phone">
                <a href="tel:+380985810334" class="phone-text"> Михайло +380985810334</a>
                <a href="tel:+380985810334"  class="phone-text">Сергій  +380985810334</a>
            </div>
            <div class="header-btn"><p class="header-btn-text"><a href="{{route('cab-page')}}">Кабінет</a></p></div>
        </div>
        </div>
    </header>
    <div class="orders">
    @yield('orders')
    </div>
    

    
</body>
</html>
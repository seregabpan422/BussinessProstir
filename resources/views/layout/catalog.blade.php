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



    <div class="address-line">
        <div class="address-container">
            <div class="address-content">
                <div class="address-text"><div class="address-p"><a href="{{route('main.page')}}">Головна</a>->Каталог</div>
               </div>
  
            </div>
          
        </div>
    </div>
    @yield('create')

    <div class="catalog">
        <div class="catalog-container">
            <div class="catalog-content">
                <div class="catalog-filters">
                    @yield('filters')
                </div>
                <div class="catalog-result">

                @yield('result-element')
   
                </div>
            </div>
        </div>
        <br><br>
    @yield('navigation')
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

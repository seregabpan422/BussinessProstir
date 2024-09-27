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
                    <ul> <a href="{{route('create-page')}}">Створити</a></ul>
                    <ul><a href="{{route('item-list')}}">Редагувати</a></ul>
                    <ul><a href="project.html">Пост</a></ul>
                    <ul><a href="{{route('about-us')}}">Замовлення</a></ul>
<!--                     <ul class="header-nav-btn"><a href="">Контакти </a></ul> -->
                    
                </li>
            </div>

            <div class="header-btn"><p class="header-btn-text"><a href="{{route('cab-page')}}">Кабінет</a></p></div>
        </div>
        </div>
    </header>



<div class="catalog">
    <div class="catalog-container">
        <div class="catalog-content">
        <div class="catalog-result">
            
 @yield('item-show')
        </div>
        </div>
        @yield('navigation')
    </div>
</div>
  


   

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOMA</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/item.css">
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
            <div class="header-btn"><p class="header-btn-text"><a href="{{route('cab-page')}}">Кабінет</a></p></div>
        </p></div>
        </div>
        </div>
    </header>
    <div class="item">
    <div class="item-info">
   @yield('item-info')
   </div>
   <div class="item-description">
    @yield('item-desc')
   </div>
   </div>


   <script>

        const plus = document.getElementById('plus');
        const minus = document.getElementById('minus');
        const countInput = document.getElementById('count');
        const priceValue = document.getElementById('price');
        const totalElement = document.getElementById('summary');
        const order = document.getElementById('order');

        let price = parseInt(priceValue.textContent, 10);
        let TotalSum = 0;
        let i = parseInt(countInput.value, 10); // Ініціалізуємо i значенням з input

        function Total(){
            TotalSum = price * i;
            totalElement.value = TotalSum;
            console.log(TotalSum);
        }

        function updateDisplay() {
            countInput.value = i; // Оновлює значення input
        
            Total();
        }

        plus.addEventListener('click', function() {
            i++;
            updateDisplay();
            console.log(i);
        });

        minus.addEventListener('click', function() {
            if (i > 1) {
                i--;
            } else {
                i = 1;
            }
           
            updateDisplay();
            console.log(i);
        });

        order.addEventListener('click', function(){
            let Summary = TotalSum;
            sendTotalPrice(TotalSum);
        });
        // Ініціалізувати відображення при завантаженні
        updateDisplay();
        
</script>
</body>
</html>
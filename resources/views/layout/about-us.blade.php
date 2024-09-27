<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon-16x16.png">
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <script src="../js/slider.js"></script>
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
  <!--                   <ul class="header-nav-btn"><a href="">Контакти </a></ul> -->
                    
                </li>
            </div>
            <div class="header-phone">
                <a href="tel:+380985810334" class="phone-text"> Михайло +380985810334</a>
                <a href="tel:+380985810334"  class="phone-text">Сергій  +380985810334</a>
            </div>
            
          @yield('cab')
        </div>
        </div>
    </header>
    <div class="information">
        <div class="information-container">
            <div class="information-content">
                <div class="information-title">Про нас</div>
                <div class="information-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere minus deserunt, nisi cumque provident cupiditate reprehenderit. 
                    Excepturi amet, consectetur et atque ratione hic voluptates consequuntur accusamus minus ullam veniam optio. Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Iure sapiente ratione accusantium beatae delectus iste laboriosam velit nobis earum quibusdam eius eum laborum, sit voluptate nemo labore. Eum, doloribus pariatur. 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quo non suscipit et laboriosam aut earum, eligendi delectus ut asperiores nisi eum doloribus, beatae ipsam hic fugit nihil veniam nulla.
                    <br><br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum deserunt suscipit nihil alias provident! Animi, adipisci natus delectus fugiat commodi error saepe. Eligendi nihil sapiente praesentium minus distinctio animi consequatur.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium sed corrupti, vero ipsa possimus rerum officiis quo voluptate voluptatibus? Velit optio recusandae tenetur aliquid esse porro quo at, in sint?
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. A voluptatem corrupti tempora quia deserunt ipsam maiores tempore earum sed beatae hic molestiae, veritatis nam saepe iure dolorum libero vero voluptate.</div>
            </div>
        </div>
    </div>
    <div class="about-img">
        <div class="about-container">
            <div class="about-content">
                <img src="../img/shop-projects/shop/3-removebg-preview.png" alt="" width="500px" height="400px" class="about-image">
                <img src="../img/sales-section/kase.png" alt="" width="500px" height="400px" class="about-image">
          
                <img src="../img/sales-section/alcohol.png" alt="" width="500px" height="400px" class="about-image">
            </div>
        </div>
    </div>
  <div class="map">
<div class="elfsight-app-7ead1faa-2e87-4cb4-92ea-b35dcf408b97" data-elfsight-app-lazy></div>
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
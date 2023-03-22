<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <!-- CUSTOME STYLESHEET-->
    <link rel="stylesheet" href="./style.css">
        <!-- ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">Translators Club</a>
            <ul class="nav__items">
                <li><a href="blog.html">المدونة</a></li>
                <li><a href="about.html">عن المدونة</a></li>
                <li><a href="services.html">الخدمات</a></li>
                <li><a href="contact.html">تواصل معنا</a></li>
               <!---- <li><a href="signin.html">تسجيل دخول</a></li>-->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avater1.jfif">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">صفحة المستخدم</a></li>
                        <li><a href="logout.html">تسجيل خروج</a></li>
                    </ul>
                </li>
            </ul>

            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--=============== END OF NAV ===================-->

       <section class="singlepost">
        <div class="container singlepost__container">
            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis quisquam iusto placeat pariatur at eligendi in mollitia, qui alias delectus deserunt, ex sapiente adipisci harum optio fugit eius dolorem sit?</h2>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avater1.jfif">
                </div>
                <div class="post__author-info">
                    <h5>By: Translator Club</h5>
                    <small>March 4, 2023 - 11:05</small>
                </div>
             </div>
             <div class="singlepost__thumbnail">
                <img src="./images/avater1.jfif">
             </div>
             <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta temporibus doloremque voluptatibus praesentium voluptate nostrum unde architecto quaerat vero eum cum repellendus saepe quis necessitatibus, quam eligendi nam expedita a!

             </p>
             <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta temporibus doloremque voluptatibus praesentium voluptate nostrum unde architecto quaerat vero eum cum repellendus saepe quis necessitatibus, quam eligendi nam expedita a!
                
             </p>
             <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta temporibus doloremque voluptatibus praesentium voluptate nostrum unde architecto quaerat vero eum cum repellendus saepe quis necessitatibus, quam eligendi nam expedita a!
                
             </p>
        </div>
       </section>
   
 <!--=============== END OF SINGLE POST===================-->
    <footer>
        <div class="footer__socials">
            <a href="https://twitter.com/translatorclub?lang=ar" target="_blank"><i class="uil uil-twitter"></i></a>
        </div>
        <div class="container footer__container">
            <article>
                <h4>الأقسام</h4>
                <ul>
                    <li><a href="">عام</a></li>
                    <li><a href="">ديني</a></li>
                    <li><a href="">علمي</a></li>
                    <li><a href="">أدبي</a></li>
                    <li><a href="">سياسي</a></li>
                    <li><a href="">مالي</a></li>
                    <li><a href="">طبي</a></li>
                </ul>
            </article>
            <article>
                <h4>المدونة </h4>
                <ul>
                    <li><a href="">الأحدث</a></li>
                    <li><a href="">الأشهر</a></li>
                    <li><a href="">الأقسام</a></li>
                </ul>
            </article>

             <article>
                <h4>الروابط</h4>
                <ul>
                    <li><a href="">الرئيسية</a></li>
                    <li><a href="">المدونة</a></li>
                    <li><a href="">عن المدونة</a></li>
                    <li><a href="">الخدمات</a></li>
                    <li><a href="">تواصل معنا</a></li>
                </ul>
            </article>
        </div>
        <div class="footer__copyright">
            <small>الحقوق محفوظة &copy;2023 نادي المترجم</small>
        </div>
    </footer>

    <script src="./main.js"></script>
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='css/style.min.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Shop</title>
</head>
<body>

<div class='header'>

    <div class='container'>
        <div class='header-line'>

            <div class='header-logo'>
                <img src="img/logo2.jpg" alt="Logo">
            </div>

            <div class='nav'>
                <a class='nav-item' href="#">Головна сторінка</a>
                <a class='nav-item' href="pc.php">Компю'тери</a>
                <a class='nav-item' href="laptop.php">Ноутбуки</a>
                <a class='nav-item' href="phone.php">Телефони</a>
                <?php
                if(isset($_SESSION['user'])):
                ?>
                <a class='nav-item' href="logout.php"><img id="photologin" src="img/exit.png" alt="Exit"></a>
                <?php else: ?>
                <a class='nav-item' href="login.php"><img id="photologin" src="img/login.png" alt="Login"></a>
                <?php endif; ?>
            </div>

            <div class='mobile-menu'>

                <button id='mobile'>
                    <img src="img/menubtn1.png" alt="Menu">
                </button>

                <div id='menu' class='mobile-slide disp'>
                    <a class='text1 block' href="#">Головна сторінка</a>
                    <a class='text2 block' href="pc.php">Компю'тери</a>
                    <a class='text3 block' href="laptop.php">Ноутбуки</a>
                    <a class='text4 block' href="phone.php">Телефони</a>
                    <?php
                if(isset($_SESSION['user'])):
                ?>
                <a class='text4 block' href="logout.php"><img id="photologin" src="img/exit.png" alt="Exit"></a>
                <?php else: ?>
                    <a class='text4 block' href="login.php"><img id="photologin" src="img/login.png" alt="Login"></a>
                <?php endif; ?>
                </div>

            </div>
        </div>
    </div>




</div>






<div class='nasha_texnika'>
    <div class='container'>
        <div class='nasha_texnika-holder'>
            <div class='nasha_texnika-info'>
                <div class='nasha_texnika-title'>
                    Наша <span>Техніка</span>
                </div>
                <div class='nasha_texnika-desc'>
                    Інтернет-магазин комп'ютерної техніки
                </div>
                <div class='nasha_texnika-number'>
                    <div class='number-item'>
                        25 <span>Комп'ютерів</span>
                    </div>
                    <div class='number-item'>
                        30 <span>Ноутбуків</span>
                    </div>
                    <div class='number-item'>
                        55 <span>Телефонів</span>
                    </div>
                </div>
            </div>
            <div class='nasha_texnika-images'>
                <img class='imgages-1' src="img/pcimg.png" alt="img1">
                <img class='imgages-2' src="img/Laptopimg.png" alt="img2">
                <img class='imgages-3' src="img/Phoneimg.png" alt="img3">
        </div>
        </div>
    </div>
</div>




<div class='infooskidke'>
    <div class='container'>
        <div class='block-holder'>
            <div class='left'>
                <div class='left-title'>
                    Замовте один з найновіших компю'терів
                </div>
                <div class='left-text'>
                    До 31.12 діє новорічна знижка
                </div>
            </div>
            <div class='right'>
                <div class='right-button'>
                    <a href='pc.html' class='right-btn'>Замовити</a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class='pronas'>
    <div class='container'>
        <div class='pronas-title'>
            Про <span>Нас</span>
        </div>
        <div class='info'>
            <div class='info-items'>
                <div class='info1-item'>
                    <img src="img/ava1.png" class=''>
                    <div class='info1-text'>
                        Дмитро - Директор
                    </div>
                </div>
                <div class='info1-item'>
                    <img src="img/ava1.png" class=''>
                    <div class='info1-text'>
                        Олексій - ІТ розробник
                    </div>
                </div>
                <div class='info1-item'>
                    <img src="img/ava1.png" class=''>
                    <div class='info1-text'>
                        Андрій - Менеджер
                    </div>
                </div>
            </div>
            <div class='txt1'>
                Ми Черкаська компанія, яка займається продажем електроніки. 
                Ми маємо для продажу нові компютери, ноутбуки та телефони<br><br>Контакти: <h6>pcshopche@gmail.com<br>+380931234567</h6>
                м.Черкаси вул. Шевченка 155
            </div>
        </div>
    </div>
</div>










<section class="tovari" id="tovari">
<div class='nashi_tovari'>

    <div class='container'>

        <div class='nashi_tovari-title'>
            Наші товари
        </div>

        <div class='nashi_tovari-items'>

            


            <div class='nashi_tovari-item'>
                <div class='nashi_tovari-image'>
                    <img src='img/Pc8.jpg' class='nashi_tovari-img'>
                </div>

                <div class='nashi_tovari-text'>
                    Комп'ютер
                </div>

                <div class='nashi_tovari-subtext'>
                    Комп'ютер COBRA Gaming
                </div>

                <div class='nashi_tovari-button'>
                    <a href='pc.html' class='nashi_tovari-btn'>Купити</a>
                </div>
            </div>




            <div class='nashi_tovari-item'>
                <div class='nashi_tovari-image'>
                    <img src='img/Ph4.jpg' class='nashi_tovari-img'>
                </div>

                <div class='nashi_tovari-text'>
                    Телефон
                </div>

                <div class='nashi_tovari-subtext'>
                    Xiaomi Redmi 10C
                </div>

                <div class='nashi_tovari-button'>
                    <a href='phone.html' class='nashi_tovari-btn'>Купити</a>
                </div>
            </div>


            <div class='nashi_tovari-item'>
                <div class='nashi_tovari-image'>
                    <img src='img/Pc2.jpg' class='nashi_tovari-img'>
                </div>

                <div class='nashi_tovari-text'>
                    Комп'ютер
                </div>

                <div class='nashi_tovari-subtext'>
                    ARTLINE Gaming X47 (X47v45)
                </div>

                <div class='nashi_tovari-button'>
                    <a href='pc.html' class='nashi_tovari-btn'>Купити</a>
                </div>
            </div>



        </div>

        <div class='nashi_tovari-items2'>

            


            <div class='nashi_tovari-item'>
                <div class='nashi_tovari-image'>
                    <img src='img/Ph2.jpg' class='nashi_tovari-img'>
                </div>

                <div class='nashi_tovari-text'>
                    Телефон
                </div>

                <div class='nashi_tovari-subtext'>
                    Motorola G32
                </div>

                <div class='nashi_tovari-button'>
                    <a href='phone.html' class='nashi_tovari-btn'>Купити</a>
                </div>
            </div>



            <div class='nashi_tovari-item'>
                <div class='nashi_tovari-image'>
                    <img src='img/Pc6.jpg' class='nashi_tovari-img'>
                </div>

                <div class='nashi_tovari-text'>
                    Комп'ютер
                </div>

                <div class='nashi_tovari-subtext'>
                    Комп'ютер ARTLINE Gaming X33 v10
                </div>

                <div class='nashi_tovari-button'>
                    <a href='pc.html' class='nashi_tovari-btn'>Купити</a>
                </div>
            </div>


            <div class='nashi_tovari-item'>
                <div class='nashi_tovari-image'>
                    <img src='img/Nt5.jpg' class='nashi_tovari-img'>
                </div>

                <div class='nashi_tovari-text'>
                    Ноутбук
                </div>

                <div class='nashi_tovari-subtext'>
                    Ноутбук Lenovo V14 G2 ITL
                </div>

                <div class='nashi_tovari-button'>
                    <a href='laptop.html' class='nashi_tovari-btn'>Купити</a>
                </div>
            </div>



        </div>



    </div>
</div>
</section>

<div class='vidguk'>

    <div class='container1'>
        <div class='vidguk-text'>
            В цьому магазині мені сподобалось все! Від продавців до купленого товару! Дякую за чудовий телефон)
        </div>
        <div class='vidguk-image'>
            <img src='img/Avamancom1.avif' class='vidguk-img'>
        </div>
        <div class='vidguk-type'>
            Клієнт
        </div>
        <div class='vidguk-name'>
            Артем
        </div>
    </div>

    <div class='container2'>
        <div class='vidguk-text'>
            Супер магазин, купила комп'ютер для мого сина, він просто в захваті! Рекомендую магазин!
        </div>
        <div class='vidguk-image'>
            <img src='img/avagirlcom.png' class='vidguk-img'>
        </div>
        <div class='vidguk-type'>
            Клієнт
        </div>
        <div class='vidguk-name'>
            Анна
        </div>
    </div>

    <div class='container3'>
        <div class='vidguk-text'>
            Нажаль, при доставці було пошкоджено коробку мого нового телефону :(
        </div>
        <div class='vidguk-image'>
            <img src='img/Avamancom.png' class='vidguk-img'>
        </div>
        <div class='vidguk-type'>
            Клієнт
        </div>
        <div class='vidguk-name'>
            Євген
        </div>
    </div>
</div>

<div class='footer'>
    Garyachiy Copyright 2023
</div>

<script src='script.js'></script>

</body>
</html>

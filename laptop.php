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
                <a class='nav-item' href="index.php">Головна сторінка</a>
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
                    <a class='text1 block' href="index.php">Головна сторінка</a>
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





<section class="tovari" id="tovari">
    <div class='nashi_tovari'>
    
        <div class='container'>
    
            <div class='nashi_tovari-title'>
                Ноутбуки
            </div>
    
            <div class='nashi_tovari-items3'>
    
                
    
    
                <div class='nashi_tovari-item'>
                    <div class='nashi_tovari-image'>
                        <img src='img/Nt1.jpg' class='nashi_tovari-img'>
                    </div>
    
                    <div class='nashi_tovari-text'>
                        Ноутбук
                    </div>
    
                    <div class='nashi_tovari-subtext'>
                        Ноутбук Acer Aspire 5 A515-45G-R9ML
                    </div>
    
                    <div class='nashi_tovari-button'>
                        <a href='#' class='nashi_tovari-btn'>Купити</a>
                    </div>
                </div>
    
    
    
    
                <div class='nashi_tovari-item'>
                    <div class='nashi_tovari-image'>
                        <img src='img/Nt2.jpg' class='nashi_tovari-img'>
                    </div>
    
                    <div class='nashi_tovari-text'>
                        Ноутбук
                    </div>
    
                    <div class='nashi_tovari-subtext'>
                        Ноутбук ASUS TUF Gaming F15
                    </div>
    
                    <div class='nashi_tovari-button'>
                        <a href='#' class='nashi_tovari-btn'>Купити</a>
                    </div>
                </div>
    
    
                <div class='nashi_tovari-item'>
                    <div class='nashi_tovari-image'>
                        <img src='img/Nt3.jpg' class='nashi_tovari-img'>
                    </div>
    
                    <div class='nashi_tovari-text'>
                        Ноутбук
                    </div>
    
                    <div class='nashi_tovari-subtext'>
                        Ноутбук Acer Aspire 7
                    </div>
    
                    <div class='nashi_tovari-button'>
                        <a href='#' class='nashi_tovari-btn'>Купити</a>
                    </div>
                </div>

            
                <div class='nashi_tovari-item'>
                    <div class='nashi_tovari-image'>
                        <img src='img/Nt4.jpg' class='nashi_tovari-img'>
                    </div>
    
                    <div class='nashi_tovari-text'>
                        Ноутбук
                    </div>
    
                    <div class='nashi_tovari-subtext'>
                        Ноутбук Lenovo IdeaPad Gaming 3 
                    </div>
    
                    <div class='nashi_tovari-button'>
                        <a href='#' class='nashi_tovari-btn'>Купити</a>
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
                        <a href='#' class='nashi_tovari-btn'>Купити</a>
                    </div>
                </div>
    
    
    
            </div>
        </div>
    </div>
    </section>












<div class='footer'>
    Garyachiy Copyright 2023
</div>

<script src='script.js'></script>

</body>
</html>

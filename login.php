<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}


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
<body>
    <div class="container_reg_aut">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div>Не вірний пароль!</div>";
                }
            }else{
                echo "<div>Email не знайдено!</div>";
            }
        }
        ?>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Введіть Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Введіть пароль:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Ввійти" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Не маєте аккаунту? <a href="registration.php">Зареєструватись</a></p></div>
    </div>
</body>
</html>
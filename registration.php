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
        if (isset($_POST["submit"])) {
           $Name = $_POST["name"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);


           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);


           

           
            
            $sql = "INSERT INTO users (name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$Name, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div>Успішно!</div>";
            }else{
                die("Error!");
            }
           
          

        }
        ?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Ім'я:">
            </div>
            <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Пароль:">
            </div>

            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Зареєструватись" name="submit">
            </div>
        </form>
        <div>
        <div><p>Є аккаунт? <a href="login.php">Ввійти</a></p></div>
      </div>
    </div>
</body>
</html>
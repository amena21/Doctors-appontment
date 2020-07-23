<?php
session_start();
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../../../resource/front-end/login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resource/front-end/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resource/front-end/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resource/front-end/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resource/front-end/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resource/front-end/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resource/front-end/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resource/front-end/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resource/front-end/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../resource/front-end/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="../../../resource/front-end/login/css/main.css">
    <!--===============================================================================================-->
</head>



<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(../../../resource/front-end/login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
            </div>

            <form class="login100-form validate-form" action="index.php" method="post">
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="user" placeholder="Enter username">

                </div>
                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="pass" placeholder="Enter password">
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit" name="submit">Login</button>
                    <button class="login100-form-btn"><a href="forumreg.php">Register</a></button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php
$user = @$_POST['user'];
$password = @$_POST['pass'];

if(isset($_POST['submit'])){

    if($user&&$password){
        $check=mysqli_query($link,"SELECT * FROM `forum_users` WHERE `user` = '$user'");
        $rows=mysqli_num_rows($check);
        if(mysqli_num_rows($check) !=0){
            while($row=mysqli_fetch_assoc($check)){
                $db_username=$row['user'];
                $db_password=$row['pass'];
            }
            if($user == $db_username && $password == $db_password){
                $_SESSION['user']=$user;
                header("Location: forum.php");
            }else{
                echo 'Wrong Password';
            }
        }else{
            die("couldn't found username");
        }
    }else{
        echo 'fill up all the fields.';
    }
}


?>



<!--===============================================================================================-->
<script src="../../../resource/front-end/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../../../resource/front-end/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../../../resource/front-end/login/vendor/bootstrap/js/popper.js"></script>
<script src="../../../resource/front-end/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../../../resource/front-end/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../../../resource/front-end/login/vendor/daterangepicker/moment.min.js"></script>
<script src="../../../resource/front-end/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../../../resource/front-end/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="../../../resource/front-end/login/js/main.js"></script>

</body>
</html>
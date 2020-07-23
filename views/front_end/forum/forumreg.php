<?php include '../include/header.php' ?>
<header class="main" style="background-color: #3F4B58;" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <nav class="navbar" role="navigation" >
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img id="logo" src="../../../resource/front-end/img/logo.png" alt="eLearn" /></a>
                </div>
                <div class="collapse navbar-collapse" color="blue">
                    <div class="navbar-right menu-main">
                        <a class="btn btn-theme navbar-btn btn-default sign-in" href="index.php">Sign in</a>
                        <a class="btn btn-theme navbar-btn btn-orange  sign-up" href="forumreg.php">Sign up</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Sign up</h1>
            </div>
            <div class="col-md-5">
                <ol class="breadcrumb pull-right">
                    <li><a href="forum.php">Home</a></li>
                    <li><a href="#">Registration</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content content-light">
    <div class="container">
        <div class="row">
        <form action="forumreg.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <input type="hidden" name="id"  value="id"/>
                        <label >Username</label>

                        <input type="text" class="form-control input-lg"  placeholder="choose an username" name="user"/>
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" class="form-control input-lg"  placeholder="choose a password" name="pass" />
                    </div>
                    <div class="form-group">
                        <label >Confirm Password</label>
                        <input type="password" class="form-control input-lg"  placeholder="confirm your chosen password"  name="repass" />
                    </div>
                    <div class="form-group">
                        <label >Email address</label>
                        <input type="email" class="form-control input-lg"  placeholder="enter your email address" name="email"/>
                    </div>
                    <div class="form-group">
                    <label>Image upload</label>
                    <input type="file" name="image" id="image"/>
                    </div>
                   <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-theme btn-orange" value="Register" />Register</button>
                    <button class="btn btn-theme btn-default"><a href="index.php">login</a></button>
                   </div>

        </form>
        </div>
    </div>
</section>


<?php

require 'connect.php';
$user = @$_POST['user'];
$password = @$_POST['pass'];
$repass = @$_POST['repass'];
$email = @$_POST['email'];

$image = $_FILES['image']['name'];
$image_temp = $_FILES['image']['tmp_name'];
 move_uploaded_file($image_temp,  "face/$image");



if(isset($_POST['submit'])){
    if($user&&$password&&$repass&&$email){
        if(strlen($user) >= 5 && strlen($user)<= 15 && strlen($password)>= 6) {

                $query = "SELECT * FROM `forum_users` WHERE `user` = '$user' OR `email` ='$email' LIMIT 1 ";
                $sth = mysqli_query($link,$query);
                $singleData =mysqli_fetch_assoc($sth);
            if ($singleData) {
                if ($singleData['user'] === $user) {
                   echo "Username already exists";
                }
                if ($singleData['email'] === $email) {
                      echo "email already exists";
                    }
            }
                else {
            if ($repass == $password) {

                $sql = "INSERT INTO forum_users (user, pass, email, image) VALUES ('$user', '$password', '$email', '$image')";
                if (mysqli_query($link, $sql)) {
                    echo "Success!!You have been registered.";
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
                mysqli_close($link);

            } else {
                echo 'Password do not match';
            }
        }
        }else{
            if(strlen($user) <= 5 && strlen($user)>= 15){
                echo 'Username must be in between 5 and 15 characters';
            }
            if (strlen($password)<= 6){
                echo 'Password must be more than 6 characters';
            }
        }
}else{
        echo 'please fill all the field';
    }
}






?>
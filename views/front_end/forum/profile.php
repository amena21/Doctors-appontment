<?php
session_start();
require ('connect.php');
if(@$_SESSION['user']){
    ?>

    <?php include '../include/header.php' ?>

    <header class="main" style="background-color: #3F4B58;">
        <div class="container">
            <nav class="navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="forum.php">
                        <img id="logo"src="../../../resource/front-end/img/logo.png"

                    </a>
                </div>
                <div class="collapse navbar-collapse" color="blue">
                    <div class="navbar-right menu-main" name="logout">
                        <a class="btn btn-theme navbar-btn btn-orange "
                           href="forum.php?action=logout">Logout</a>
                    </div>
                    <div class="navbar-right menu-main" name="logout">
                        <a class="btn btn-theme navbar-btn btn-orange "
                           href="member.php">Member</a>
                    </div>
                    <div class="navbar-right menu-main" name="logout">
                        <a class="btn btn-theme navbar-btn btn-orange "
                           href="account.php">My Account</a>
                    </div>
                    <div class="navbar-right menu-main" name="logout">
                        <a class="btn btn-theme navbar-btn btn-orange "
                           href="forum.php">Home page</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <body>
    <div class="col-md-12">
        <?php
         echo "<center><h1></h1>";
        if(@$_GET['id']){
            $check = mysqli_query($link,"SELECT * FROM `forum_users` where id='".$_GET['id']."'");
            $rows = mysqli_num_rows($check);
            if(mysqli_num_rows($check)!= 0){
                while($row=mysqli_fetch_assoc($check)){
                echo "<h2>".'UserName :'.$row['user']."</h2><img src='face/".$row['image']."' width='50' height='50'>";
                echo "<h4>".'Email :'.$row['email']."</h4>";
                echo "<h4>".'Replies :'.$row['replies']."</h4>";
                echo "<h4>".'Score :'.$row['score']."</h4>";
                echo "<h4>".'Topics Created :'.$row['topics']."</h4>";
                }
            }else{
                echo 'Id not found';
            }
        }else{
            header("Location: forum.php");
        }
        ?>
    </div>

    </body>
    <?php
    if (@$_GET['action'] == "logout") {
        session_destroy();
        header("Location: index.php");
    }
}else {
    echo 'You must be logged in';
}
?>
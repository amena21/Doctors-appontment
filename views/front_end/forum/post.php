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
     <form action="post.php" method="post">
         <center>
             <br>
             Topic Name: <br>
             <input type="text" name="topic_name" style="width: 400px;"><br>
             Content: <br>
             <textarea style="resize: none;width: 400px;height: 300px;" name="con"></textarea><br>
             <input type="submit" name="submit" value="post" style="width: 400px;">
         </center>
     </form>
    </div>

    </body>
    <?php
    $t_name = @$_POST['topic_name'];
    $content = @$_POST['con'];
    $date = date("y-m-d");
    if (isset($_POST['submit'])) {
        if($t_name && $content){
            if(strlen($t_name)>= 10 && strlen($t_name)<=70){


           if($query = mysqli_query($link,"INSERT INTO `online_learning`.`topics` (`topic_id`, `topic_name`, `topic_content`, `topic_creator`, `date`) VALUES ('', '".$t_name."', '".$content."', '".$_SESSION["user"]."', '".$date."');")){

                     echo 'success';
                 }else{
                     echo 'failed';
                 }
            }else{
                echo 'Topic name must be in between 10 to 70 characters';
            }
        }else{
            echo 'Please fill all the field';
        }
    }
}else {
    echo 'You must be logged in';
}
?>
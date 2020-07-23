
<?php
session_start();
require ('connect.php');
if(@$_SESSION['user']) {

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
<center>
   <h3><a href="#"> Topic Details </a></h3>
   <?php

   if($_GET['id']){
       $check=mysqli_query($link,"SELECT * FROM `topics` WHERE topic_id='".$_GET['id']."'");
       if(mysqli_num_rows($check)){
           while($row=mysqli_fetch_assoc($check)) {
             $id = $_GET['id'];
               echo "<h2>".$row['topic_name']."</h2>";
               echo "<h5>".$row['topic_content']."</h5>";
               echo "<h6>"."Posted by:"." ".$row['topic_creator']."</h6>";
               echo "<h6>"."Date:"." ".$row['date']."</h6>";
 echo " <a href='replies.php?id=$id'><button style='width: 350px; margin-left:'>Reply Question</button></a>
";
           }
       }else{
           echo 'topic not found';
       }
   }else {
     header("Location: forum.php");
   }
   ?>

   
    <div>

        <?php
       
        if($_GET['id']){

  $check_t=mysqli_query($link,"SELECT * FROM `topics` WHERE topic_id='".$_GET['id']."'");
       if(mysqli_num_rows($check_t)){

           while($row=mysqli_fetch_assoc($check_t)) {
               $topic_name =$row['topic_name'];

       





            $check=mysqli_query($link,"SELECT * FROM `replies` WHERE replies_name='".$topic_name."'");
            if(mysqli_num_rows($check)){
                while($row=mysqli_fetch_assoc($check)) {
                    echo "<button>";
                    echo "<h5>".$row['replies_content']."</h5>";
                    echo "<h6>"."Posted by:"." ".$row['replies_creator']."</h6>";
                    echo "<h6>"."Date:"." ".$row['date']."</h6>";
                    echo "</button>"."<br>";
                     }
            }
          }
        }else{
                echo 'No replies';
            }
        }else {
            header("Location: topics.php");
        }
        ?>

    </div>
</center>
    </body>
    <?php


}else {
    echo 'You must be logged in';
    
}


?>




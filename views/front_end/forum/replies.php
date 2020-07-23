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
        <form action="replies.php" method="post">
            <center>
                <br>
      <?php 
      if($_GET['id']){
       $check=mysqli_query($link,"SELECT * FROM `topics` WHERE topic_id='".$_GET['id']."'");
       if(mysqli_num_rows($check)){

           while($row=mysqli_fetch_assoc($check)) {
               $topic_name =$row['topic_name'];

               ?>
                Answer of the Question: <br>
                <input style="resize: none;width: 400px;height: 50px;" name="replies_name" value="<?php echo $topic_name;?>" readonly><br>
            <?php 
        }
        }
    }
                ?>
                <textarea style="resize: none;width: 400px;height: 300px;" name="con"></textarea><br>
                <input type="submit" name="submit" value="post" style="width: 400px;">
            </center>
        </form>
    </div>

    </body>
    <?php
      $replies_name = @$_POST['replies_name'];
    $content = @$_POST['con'];
    $date = date("y-m-d");
    if (isset($_POST['submit'])) {
        if($content){
              if($query = mysqli_query($link,"INSERT INTO `online_learning`.`replies` (`replies_id`, `replies_name`,`replies_content`, `replies_creator`, `date`) VALUES ('', '".$replies_name."', '".$content."', '".$_SESSION["user"]."', '".$date."');")){

                    echo 'success';
                }else{
                    echo 'failed';
                }

        }else{
            echo 'Please fill all the field';
        }
    }
}else {
    echo 'You must be logged in';
}
?>
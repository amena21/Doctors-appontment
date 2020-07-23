
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

    <div class="col-md-12">
        <div class="col-md-4">
            <h3 style="text-align: center"><?php echo "Welcome" ." ".$_SESSION['user'];?></h3>
            <a href="post.php"><button style="width: 350px; margin-left:">Post Question</button></a>
        </div>

        <div class="col-md-8" style="">


            <div class="col-md-5" style="margin-left: 100px">

                    <h3  style="padding-top: 20px">Recent Question</h3><br>


                <?php

                $check=mysqli_query($link,"SELECT * FROM `topics`");
                if(mysqli_num_rows($check) !=0){
                    while($row=mysqli_fetch_assoc($check)){
                        $id = $row['topic_id'];
                        $t_name = $row['topic_name'];
                        $t_creator = $row['topic_creator'];
                        $date = $row['date'];


                        echo "<a href='topics.php?id=$id'>".$t_name."</a>"."<br>";
                        echo $date."<br>";
                        echo "Posted by:".$t_creator."<br>";

                    }

                }else{
                    echo 'No Topics found';
                }
                ?>


                <a href='topics.php'>View All</a>

            </div>

            </div>
        </div>


    </body>
    <?php

    if (@$_GET['action'] == "logout") {
        session_destroy();
        header("Location: index.php");
    }
    }else {
        echo 'You must be logged in';
        header("Location: ../user/index.php");
    }


    ?>




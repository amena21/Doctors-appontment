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
                        <img id="logo" src="../../../resource/front-end/img/logo.png"

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
        $check = mysqli_query($link, "SELECT * FROM `forum_users` where `user` = '" . @$_SESSION['user'] . "'");
        $rows = mysqli_num_rows($check);
        while ($row = mysqli_fetch_assoc($check)) {

            $username = $row['user'];
            $id = $row['id'];
            $email = $row['email'];
            $replies = $row['replies'];
            $score = $row['score'];
            $topics = $row['topics'];
            $image = $row['image'];

        }
        ?>
        <?php echo "<img src='face/$image' width='70' height='70'>"; ?>
        <?php echo "<h3>  UserName: $username</h3>"; ?>
        <?php echo "<h4>  ID: $id</h4>"; ?>
        <?php echo "<h4>  Email: $email</h4>"; ?>
        <?php echo "<h4>  Replies: $replies</h4>"; ?>
        <?php echo "<h4>  Score: $score</h4>"; ?>
        <?php echo "<h4>  Topics Created: $topics</h4>"; ?>

        <a href="account.php?action=cp">Change Password</a>


    </div>

    </body>
    <?php
    if (@$_GET['action'] == "logout") {
        session_destroy();
        header("Location: forumlogin.php");
    }
    if (@$_GET['action'] == "cp"){
        echo "<form action='account.php?action=cp' method='post'><center>";
        echo "
             Current Password: <input type='text' name='curr_pass'><br/>
             New Password: <input type='password' name='new_pass'><br/>
             Re-type Password: <input type='password' name='re_pass'><br/>
            <input type='submit' name='change_pass' value='change'><br/>";

        $curr_pass = @$_POST['curr_pass'];
        $new_pass = @$_POST['new_pass'];
        $re_pass = @$_POST['re_pass'];
        if (isset($_POST['change_pass'])) {

            $check = mysqli_query($link, "SELECT * FROM `forum_users` where `user` = '".$_SESSION['user']."'");
            $rows = mysqli_num_rows($check);
            while ($row = mysqli_fetch_assoc($check)) {

                $get_pass = $row['pass'];
            }
            if ($curr_pass == $get_pass) {
                if ($re_pass == $new_pass) {

                   if($query = mysqli_query($link, "UPDATE forum_users SET pass ='".$new_pass."' WHERE user='".$_SESSION['user']."'" )){
                        echo 'password change';
                      }
                  }else {
                    echo 'new password do not match';
                  }
                } else {
                    echo 'Current password do not match with real password';
                }
            }
        echo "</center></form>";
    }

}else {
        echo 'You must be logged in';
      }

?>







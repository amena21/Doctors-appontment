<?php
session_start();
require '../connect.php';


if (@$_SESSION['email']) {


$query =   "SELECT * FROM `online_learning`.`t_reg` where `email` = '" . @$_SESSION['email'] . "' ";
$select_posts = mysqli_query($link,$query);
$row=mysqli_num_rows($select_posts);

while($row=mysqli_fetch_assoc($select_posts)) {
    $id=$row['id'];
    $first_name = $row['first_name'];
    $user = $row['user'];
    $pass = $row['pass'];
    $last_name = $row['last_name'];
    $email = $row['email'];
    $date = $row['date'];
    $gender = $row['gender'];
    $fb = $row['fb'];
    $linkedin = $row['link'];

}
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="../../../../resource/admin/pro.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->


<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="../../../../resource/admin/assets/dist/img/avatar.png" alt=""/>

                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                       <?php echo "$first_name" . " " . "$last_name"."<br>"; ?>
                    </h5>
                    <h6>
                       Teacher
                    </h6>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <a  href="../user/index.php" class="btn btn-default">Homepage</a>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>Socilal Media Link</p>
                    <a href="<?php echo "$fb"."<br>"; ?>" class="fa fa-facebook">Facebook Link</a><br/>
                    <a href="<?php echo "$linkedin"."<br>";?>" class="fa fa-linkedin">Linkedin Profile</a><br/>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>User Name:</label>
                            </div>
                            <div class="col-md-6">
                                <p> <?php echo "$user"."<br>"; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo "$first_name"." "."$last_name";?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email:</label>
                            </div>
                            <div class="col-md-6">
                                <p> <?php echo "$email"."<br>"; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Gender:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo "$gender"."<br>"; ?></p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </form>
</div>
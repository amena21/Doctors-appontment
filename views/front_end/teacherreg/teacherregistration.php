
<?php include '../include/header.php' ?>
<?php include '../include/menu.php' ?>
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Sign up an account</h1>
            </div>
            <div class="col-md-5">
                <ol class="breadcrumb pull-right">
                    <li><a href="../user/index.php">Home</a></li>
                    <li><a href="#">Registration</a></li>
                    <li class="active">Teacher Account</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content content-light">
    <div class="container">
        <!-- Profil create stage - dotted -->
        <hr class="invisible" />
        <hr class="invisible" />
        <hr class="invisible" />

        <form action="teacherregistration.php" method="post">
            <h2 class="title-form">Personal information</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fieldInputName">First name</label>
                        <input type="text" class="form-control input-lg" id="fieldInputName" placeholder="enter your name" name="first_name" />
                    </div>
                    <div class="form-group">
                        <label for="fieldInputUsername">Username</label>
                        <input type="text" class="form-control input-lg" id="fieldInputUsername" placeholder="choose an username" name="user"/>
                    </div>
                    <div class="form-group">
                        <label for="fieldInputPassword1">Password</label>
                        <input type="password" class="form-control input-lg" id="fieldInputPassword1" placeholder="choose a password" name="pass"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fieldInputLastname">Last name</label>
                        <input type="text" class="form-control input-lg" id="fieldInputLastname" placeholder="enter your last name" name="last_name" />
                    </div>
                    <div class="form-group">
                        <label for="fieldInputEmail1">Email address</label>
                        <input type="email" class="form-control input-lg" id="fieldInputEmail1" placeholder="enter your email address" name="email"/>
                    </div>
                    <div class="form-group">
                        <label for="fieldInputPassword2">Confirm Password</label>
                        <input type="password" class="form-control input-lg" id="fieldInputPassword2" placeholder="confirm your chosen password" name="re_pass"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fieldInputBirth">Date of birth</label>
                        <input type="date" class="form-control input-lg" id="fieldInputBirth" placeholder="DD/MM/YYYY" name="date"/>
                    </div>
                    <div class="form-group">
                        <label for="fieldInputEmail2">Confirm email</label>
                        <input type="email" class="form-control input-lg" id="fieldInputEmail2" placeholder="enter your email address" name="re_email" />
                    </div>
                    <div class="form-group">
                        <label for="fieldSelectGender">Gender</label>
                        <select class="form-control input-lg" id="fieldSelectGender" name="gender">
                            <option value="#"></option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr class="invisible" />
            <hr class="invisible" />
            <h2 class="title-form">Add social networks</h2>
            <div class="form-inline">
                <a class="btn btn-lg btn-social btn-gray social-facebook" href="#facebook"><i class="fa fa-facebook"></i></a>
                <div class="form-group">
                    <input type="url" class="form-control input-social input-lg" id="fieldInputFacebook" placeholder="profile address URL" name="fb"/>
                </div>
                <a class="btn btn-lg btn-social btn-gray social-linkedin" href="#linkedin"><i class="fa fa-linkedin"></i></a>
                <div class="form-group">
                    <input type="url" class="form-control input-social input-lg" id="fieldInputLinkedin" placeholder="profile address URL" name="link"/>
                </div>
            </div>
            <hr class="invisible" />
            <hr class="invisible" />
            <p><input type="submit" class="btn btn-theme btn-orange" name="submit" value="Sign up" />
                <button class="btn btn-theme btn-default"><a href="../login/t_login.php">Login</a></button>
            </p>
        </form>

    </div>
</section>

<?php
require '../connect.php';
$first_name = @$_POST['first_name'];
$user = @$_POST['user'];
$pass = @$_POST['pass'];
$last_name = @$_POST['last_name'];
$email = @$_POST['email'];
$repass = @$_POST['re_pass'];
$date = @$_POST['date'];
$reemail = @$_POST['re_email'];
$gender = @$_POST['gender'];
$fb = @$_POST['fb'];
$linkedin = @$_POST['link'];





if(isset($_POST['submit'])){
    if($first_name&&$user&&$pass&&$last_name&&$email&&$repass&&$date&&$reemail&&$gender&&$fb&&$linkedin){
        if(strlen($user) >= 5 && strlen($user)<= 15 && strlen($pass)>= 6) {

            $query = "SELECT * FROM `t_reg` WHERE `user` = '$user' OR `email` ='$email' LIMIT 1 ";
            $sth = mysqli_query($link, $query);
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
                if ($repass == $pass && $reemail == $email ) {

                    $sql = "INSERT INTO `online_learning`.`t_reg` (`id`, `first_name`, `user`, `pass`, `last_name`, `email`, `date`, `gender`, `fb`, `link`) VALUES ('', '$first_name', '$user', '$pass', '$last_name', '$email', '$date', '$gender', '$fb', '$linkedin')";
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
            if (strlen($pass)<= 6){
                echo 'Password must be more than 6 characters';
            }
        }
    }else{
        echo 'please fill all the field';
    }
}
?>
<?php include '../include/footer.php' ?>
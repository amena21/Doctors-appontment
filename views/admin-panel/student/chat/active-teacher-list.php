<?php session_start(); ?>
<?php include '../include/head.php'?>
<?php include '../include/header.php'?>
<?php include '../include/sidebar.php'?>


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="pe-7s-note2"></i>
            </div>
            <div class="header-title">
                <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                        <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                    </span>
                    </div>
                </form>
                <h1>Active Member</h1>
                <small>List </small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="../user/index.php"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">list</li>
                </ol>
            </div>
        </section>
 <section class="content">
            <div class="row">
      
   

<?php

//fetch_user.php

include('conn.php');

$query_id= "SELECT * from users where email='".$_SESSION["email"]."'";

$statement = $connect->prepare($query_id);

$statement->execute();

$result = $statement->fetchAll();
foreach($result as $row){
$id = $row['id'];
}


$query = "
SELECT * FROM users 
WHERE email != '".$_SESSION['email']."' 
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '
<table class="table table-bordered table-striped">
 <tr>
  <td>Username</td>
  <td>Status</td>
  <td>Action</td>
 </tr>
';

foreach($result as $row)
{
  $status ='';
 $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
 $user_last_activity = fetch_user_last_activity($row['id'], $connect);
 if($user_last_activity > $current_timestamp)
 {
  $status = '<span class="label label-success">Online</span>';
 }
 else
 {
  $status = '<span class="label label-danger">Offline</span>';
 }
 $output .= '
<tr>
  <td>'.$row['user'].''.count_unseen_message($row['id'], $id, $connect).'</td>
  <td>'.$status.'</td>

  <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['id'].'" data-tousername="'.$row['user'].'">Start Chat</button>
  </td>
</tr>';}


$output .= '</table>';


echo $output;


?>
  


  </div>

</section>
</div>




<?php 
require '../connect.php';
error_reporting(0);


?>


<?php session_start();?>
<?php include '../include/head.php'?>
<?php include '../include/header.php'?>
<?php include '../include/sidebar.php'?>



<!-- Content Wrapper. Contains page content -->
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
            <h1>Mark</h1>
            <small>Information </small>
            
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- Form controls -->
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        
                    </div>
                    <?php
                    $query = "SELECT * FROM assignment where id='".$_GET['id']."'";
                     $select_posts = mysqli_query($link,$query);
                        while ($row=mysqli_fetch_assoc($select_posts)) {
                        $id = $row['id'];
                        $s_name = $row['s_name'];
                        $s_date = $row['s_date'];
                        $class = $row['class'];
                        $subject = $row['subject'];
                        $s_email = $row['s_email'];
                        $email = $row['st_email'];
                        $topics = $row['topics'];                      
                       


}



?>

                    <div class="panel-body">
                            <form class="col-sm-12" action="" method="GET">
                             <div class="col-sm-6 form-group">
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                                    <label>Student Name </label>

                                    <input type="text" class="form-control" name="s_name" value="<?php echo $s_name;?>" readonly>
                                </div>
                                 <div class="col-sm-6 form-group">
                                    <label> Submission Date</label>
                                    <input type="date" class="form-control" name="s_date" value="<?php echo $s_date;?>" readonly>
                                </div>
                            <div class="col-sm-6 form-group">
                                    <label>Class </label>
                                    <input type="text" class="form-control" name="class" value="<?php echo $class;?>" readonly>
                                </div>

                                <div class="col-sm-6 form-group">
                                     <label>Subject</label>
                                    <input type="text" class="form-control" name="subject" value="<?php echo $subject;?>" readonly>                                
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Submitted By </label>
                                    <input type="email" class="form-control" name="s_email" value="<?php echo $s_email;?>" readonly>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Teacher Email </label>
                                    <input type="email" class="form-control" name="st_email" value="<?php echo $email;?>" readonly>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Assignment on </label>
                                    <input type="text" class="form-control" placeholder="topics" name="topics" value="<?php echo $topics;?>" readonly>
                                </div>


                               
                                <div class="col-sm-6 form-group">
                                    <label>Mark</label>
                                    <input type="text" class="form-control" name="mark"> 
                                    
                                </div>
                            <input type="submit" name="submit" value="Submit">
                            <!-- <div class="col-sm-12 reset-button">                
                             
                            </div> -->
                        </form>



<?php 
if($_GET['submit']){

$s_name =$_GET['s_name'];
$s_date =$_GET['s_date'];
$class=$_GET['class'];
$subject=$_GET['subject'];
$s_email =$_GET['s_email'];
$email =$_GET['st_email'];
$topics =$_GET['topics']; 
$mark =$_GET['mark']; 

$up_query= "INSERT INTO `online_learning`.`mark` (`id`,`s_name`,`s_date`,`class`,`subject`,`s_email`,`st_email`,`topics`,`mark`) VALUES ('','$s_name','$s_date','$class','$subject','$s_email','$email','$topics','$mark')";
  $data=mysqli_query($link,$up_query);
  
  if($data){
    echo "Dta has been Inserted Successfully"; 
   header("Location:mark-list.php");
  }else{
    echo "not updated";
  }
}else{
    echo "Buton did not pressed";
}

  

?>
                       
</div>
                  

                     <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    </section> <!-- /.content -->                 
         
<?php include '../include/footer.php'?>

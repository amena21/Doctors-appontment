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
            <h1>Update</h1>
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
                        <div class="btn-group">
                            <a class="btn btn-primary" href="book-list.php"> <i class="fa fa-list"></i>Book List </a>
                        </div>
                    </div>
                    <?php
                    $query = "SELECT * FROM book where id='".$_GET['id']."'";
                     $select_posts = mysqli_query($link,$query);
                        while ($row=mysqli_fetch_assoc($select_posts)) {
                        $id = $row['id'];
                     
                        $class = $row['class'];
                        $subject = $row['subject'];
                       
                        $author = $row['author'];
                        $email = $row['t_email'];
                        $file = $row['file'];
}
?>

                    <div class="panel-body">
                            <form class="col-sm-12" action="" method="GET">
                            <div class="col-sm-6 form-group">
                                <label>Class</label>
                                <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                               <input type="text" class="form-control" name="class" value="<?php echo $class;?>">
                            </div>                        
                           <div class="col-sm-6 form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" name="subject" value="<?php echo $subject;?>">
                            </div>                            
                           
                           
                            <div class="col-sm-6 form-group">
                                <label>Author</label>
                                <input type="text" class="form-control" placeholder="Author" name="author" value="<?php echo $author;?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Teacher email</label>
                                <input type="email" class="form-control"  name="t_email" value="<?php echo $email;?>">
                            </div>

                            <div class="col-sm-6 form-group">
                                <label>Book upload</label>
                                <input type="file" name="file">
                                <?php echo $file;?>                             
                            </div>
                            <input type="submit" name="submit" value="Update">
                            <!-- <div class="col-sm-12 reset-button">                
                             
                            </div> -->
                        </form>

<?php 
if($_GET['submit']){


$class=$_GET['class'];
$subject=$_GET['subject'];

$author=$_GET['author'];
$email=$_GET['t_email'];
$file=$_GET['file'];
  $up_query= "UPDATE book SET class='$class',subject='$subject',author='$author',t_email='$email',file='$file'WHERE id='$id'";
  $data=mysqli_query($link,$up_query);
  
  if($data){
    echo "Dta has been updated Successfully"; 
    header("Location: book-list.php");
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

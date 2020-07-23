<?php
session_start();
require '../connect.php';
error_reporting(0);
if (@$_SESSION['email']) {

?>
    
<?php 
    $query =   "SELECT * FROM mark WHERE s_email= '".$_SESSION['email']."'";
    $select_posts = mysqli_query($link,$query);


?>




<?php include '../include/head.php'?>
<?php include '../include/header.php'?>
<?php include '../include/sidebar.php'?>



<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-box1"></i>
        </div>
        <div class="header-title">
           
            <h1>Assisgnment</h1>
            <small>Assignment list</small>
            <ol class="breadcrumb hidden-xs">
                <li><a href="../user/index.php"><i class="pe-7s-home"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="btn-group">
                            <a class="btn btn-success" href=""> <i class="fa fa-plus"></i> </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="panel-header">
                              
                                <div class="col-sm-4 col-xs-12">
                                
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="dataTables_length">
                                        <div class="input-group custom-search-form">
                                           
                                       
                                        </div><!-- /input-group -->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Serial No</th>
                                     <th>Student Name</th>
                                      <th>Submission Date</th>
                                    <th>Class</th>
                                    <th>Subject</th>
                                   <th> Submitted By</th>
                                   <th>Teacher Email</th>
                                    <th>Assignment on</th>                         
                                   
                                   <th>Mark</th>
                                    <th>Update</th>
                                </tr>
                                </thead>
<?php                            
while ($row=mysqli_fetch_assoc($select_posts)) {
 $id = $row['id'];
 $s_name = $row['s_name'];
 $s_date = $row['s_date'];
 $class = $row['class'];
 $subject = $row['subject'];
$s_email = $row['s_email'];

$email = $row['st_email'];
$topics = $row['topics'];

$mark = $row['mark'];

// var_dump($fileviw);
// die();

    echo '<tbody>';
    echo '<tr>';
              
    echo '<td>'.'<input type="radio" name="radioGroup">'.'<label>'.$id.'</label>'.'</td>';
    echo '<td>'.$s_name.'</td>';
    echo '<td>'.$s_date.'</td>';
    echo '<td>'.$class.'</td>';
    echo '<td>'.$subject.'</td>';
    echo '<td>'.$s_email.'</td>';                            
    echo '<td>'.$email.'</td>';
    echo '<td>'.$topics.'</td>';
    echo '<td>'.$mark.'</td>';
  
   
   
    echo "<td><a href='delete-file.php?id=".$id."' onclick='checkdelete()'>Delete</a></td>";
                             
    echo "</tr>";
    echo "</tbody>"; 
    }
 }
 ?> 


                      </table>
                           
     
                            <script> function checkdelete(){
                                confirm('Are you confirm to delete the data');
                            }</script>
                        </div>

                        <div class="page-nation text-right">
                            <ul class="pagination pagination-large">
                                <li class="disabled"><span>«</span></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li class="disabled"><span>...</span></li><li>
                                <li><a rel="next" href="#">Next</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section> <!-- /.content -->

<?php include '../include/footer.php'?>


















































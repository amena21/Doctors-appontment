<?php
session_start();
require '../connect.php';
error_reporting(0);
$query =   "SELECT * FROM subject";
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
           
            <h1>Subject</h1>
            <small>Subject list</small>
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
                            <a class="btn btn-success" href="add-sub.php"> <i class="fa fa-plus"></i> Add Subject
                            </a>
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
                                    <th>Class</th>
                                    <th>Subject</th>
                                   
                                    <th colspan="2">Update</th>
                                </tr>
                                </thead>
<?php                            
while ($row=mysqli_fetch_assoc($select_posts)) {
 $id = $row['id'];
 $class = $row['class'];
 $subject = $row['subject'];


    echo '<tbody>';
    echo '<tr>';
              
     echo '<td>'.'<input type="radio" name="radioGroup">'.'<label>'.$id.'</label>'.'</td>';
     echo '<td>'.$class.'</td>';
    echo '<td>'.$subject.'</td>';
   

 


                                    echo "<td><a href='edit-sub.php?id=".$id."class=".$class."subject=".$subject."'>Edit</a></td>";
                                    echo "<td><a href='delete-sub.php?id=".$id."' onclick='checkdelete()'>Delete</a></td>";
                                   
                                    
      
                                                               
                                echo "</tr>";
                                echo "</tbody>"; 
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


















































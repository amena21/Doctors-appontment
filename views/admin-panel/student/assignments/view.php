<?php session_start(); ?>
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
                <h1>Assignment </h1>
                <small>Information </small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="../user/index.php"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
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
                                <a class="btn btn-primary" href="ass-list.php"> <i class="fa fa-list"></i>Assignment List </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-12" action="" method="post">
                              <div class="col-sm-4 form-group">
                                <label>Class</label>
                                <input type="text" class="form-control" name="class">
                            </div> 
                              <div class="col-sm-4 form-group">
                                     <label>Subject</label>
                                     <input type="text" class="form-control" name="subject">
                                </div>
                             <div class="col-sm-4">                
                                <input type="submit"class="btn btn-success" name="submit">
                            </div>

                        </form></div>
                    </div>
                </div></div>
            </section>
                           

<?php 
                     if(isset($_POST['submit'])){
    
                    $class = @$_POST['class'];
                      $subject = @$_POST['subject'];

                    $query =  "SELECT * FROM t_class_material WHERE class ='".$class."' AND subject ='".$subject."'";
                     $select_posts = mysqli_query($link,$query);
                      }
                     ?>

    






<!-- =============================================== -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                       
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
                                    <th>Date</th>
                                    <th>Class</th>
                                    <th>Subject</th>
                                    <th>Title</th>
                                   
                                    <th>Author</th>
                                
                                     <th>Author Email</th>
                                   <th>Assisgnment</th>
                                   
                                </tr>
                                </thead>
<?php                            
while ($row=mysqli_fetch_assoc($select_posts)) {
 $id = $row['id'];
 $date = $row['date'];
 $class = $row['class'];
 $subject = $row['subject'];
$title = $row['title'];

$author = $row['author'];

$email = $row['a_email'];

$fileviw = $row['file'];

// var_dump($fileviw);
// die();

    echo '<tbody>';
    echo '<tr>';
              
     echo '<td>'.'<input type="radio" name="radioGroup">'.'<label>'.$id.'</label>'.'</td>';
    echo '<td>'.$date.'</td>';
    echo '<td>'.$class.'</td>';
    echo '<td>'.$subject.'</td>';
    echo '<td>'.$title.'</td>';
   
    echo '<td>'.$author.'</td>';
  
    echo '<td>'.$email.'</td>';
    echo "<td><a href='../../teacher/class-material/".$fileviw."'>$fileviw</a></td>";
  
    echo "</tr>";
    echo "</tbody>"; 
                }
         
?> 


</table>
                           
     
                            
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


















































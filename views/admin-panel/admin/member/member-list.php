<?php
require '../connect.php';
$query =   "SELECT * FROM users ORDER BY id";
$select_posts = mysqli_query($link,$query);
?>
<?php
// $sql="SELECT count(id) AS total FROM users UNION SELECT * FROM t_reg";
// $result = mysqli_query($link,$sql);
// $value= mysqli_fetch_assoc($result);
// $num_rows=$value['total'];
?>
<?php include '../../admin/include/head.php'?>
<?php include '../../admin/include/header.php'?>
<?php include '../../admin/include/sidebar.php'?>



<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-box1"></i>
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
            <h1>Members</h1>
            <small>Members list</small>
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
                            <a class="btn btn-success" href="#"> <i class="fa fa-plus"></i>  </a>

                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="panel-header">
                                <div class="col-sm-4 col-xs-12">
                                    <div class="dataTables_length">

                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">

                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="dataTables_length">

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
                                    <th>First Name</th>
                                    <th>last Name</th>
                                    <th>UserName</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Date</th>
                                    <th>Gender</th>
                                    <th>Facebook</th>
                                    <th>Linkedin</th>
                                   <th>Update</th>
                                </tr>
                                </thead>

                                <tbody>

                                    <?php


                                    $serial = 1;
                                    while($row=mysqli_fetch_assoc($select_posts)) {

                                        $id = $row['id'];
                                        $first_name = $row['first_name'];
                                        $user = $row['user'];
                                        $password = $row['pass'];
                                        $last_name = $row['last_name'];
                                        $email = $row['email'];
                                        $date = $row['date'];
                                        $gender = $row['gender'];
                                        $fb = $row['fb'];
                                        $linkedin = $row['link'];



                                            echo "<tr >";

                                            echo "<td>" .
                                                "<input type='radio' name='radioGroup'>" . "<label>" . $id . "</label>" . " </td>";


                                            echo "<td>" . $first_name . "</td>";
                                            echo "<td>" . $last_name . "</td>";
                                            echo "<td>" . $user . "</td>";
                                            echo "<td>" . $email . "</td>";
                                            echo "<td>" . $password . "</td>";
                                            echo "<td>" . $date . "</td>";
                                            echo "<td>" . $gender . "</td>";
                                            echo "<td>" . $fb . "</td>";
                                            echo "<td>" . $linkedin . "</td>";

                                            echo "<td>" . "<a type='button' href='#' onclick='#' class='btn btn-danger btn-xs'>" . "<i class='fa fa-trash-o'>" . "</i>" . "</a>" . "</td>";
                                            echo "</tr >";
                                        }
                                    $serial++;
                                    ?>


                                </tbody>

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


<?php include '../../admin/include/footer.php'?>










 <td><img src="../../../resource/assets/dist/img/d3.png" class="img-circle" alt="User Image" height="50" width="50"></td>
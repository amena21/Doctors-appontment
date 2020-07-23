<?php
require '../connect.php';
if (@$_SESSION['email']) {

?>
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="image pull-left">
                <img src="../../../../resource/admin/assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="info">
                <h4>Welcome </h4>
                <p><?php echo $_SESSION['email']; ?></p>
            </div>
        </div>


        <?php
        }
?>
        <!-- sidebar menu -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="../user/index.php"><i class="fa fa-hospital-o"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-md"></i><span> Assignments </span>
                    <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                </a>

                <ul class="treeview-menu">
                    <li><a href="../assignments/add-ass.php">Submit Assignments</a></li>
                    <li><a href="../assignments/ass-list.php">View Submitted Assignments</a></li>



                </ul>
            </li>
              <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i><span>Assignment by teacher</span>
                    <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../assignments/view.php">Download the Assignment</a></li>

                </ul>
                 <ul class="treeview-menu">
                    <li><a href="../assignments/mark-list.php">Assignment Marks</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i><span>Chat with Members</span>
                    <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../chat/active.php">All Member list</a></li>

                </ul>
            </li>

          

        </ul>
    </div> <!-- /.sidebar -->
</aside>

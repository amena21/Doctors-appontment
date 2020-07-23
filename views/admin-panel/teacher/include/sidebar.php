<?php
require '../connect.php';
if (@$_SESSION['email']) {

?>
<!-- =============================================== -->
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
                    <i class="fa fa-user-md"></i><span> Class materials </span>
                    <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                </a>

                <ul class="treeview-menu">
                    <li><a href="../class-material/add-video.php"> Add Class materials </a></li>
                    <li><a href="../class-material/video-list.php"> View Class materials </a></li>

                </ul>
            </li>

          <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-md"></i><span> Smart Book </span>
                    <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                </a>

                <ul class="treeview-menu">
                    <li><a href="../book/add-book.php"> Add Book </a></li>
                    <li><a href="../book/book-list.php"> View Book </a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-sitemap"></i><span>Students submission</span>
                    <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../submission/sub-list.php">Submitted Files</a></li>

                </ul>
            </li>

     <li class="treeview">
                <a href="#">
                    <i class="fa fa-sitemap"></i><span>Chat with Others</span>
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

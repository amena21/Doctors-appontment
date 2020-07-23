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
            <h1>Subject</h1>
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
                            <a class="btn btn-primary" href="sub-list.php"> <i class="fa fa-list"></i>Subject List </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="col-sm-12" action="store.php" method="post">
                            <div class="col-sm-6 form-group">
                                <label>Class</label>
                                <input type="hidden" class="form-control" name="id">
                                <input type="text" class="form-control" name="class">
                            </div>                                               
                           <div class="col-sm-6 form-group">
                                <label>Subject</label>
                                
                                <input type="text" class="form-control" name="subject">
                            </div>                                           
                            <div class="col-sm-12 form-group">                 
                                <input type="submit"class="btn btn-success" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->

<?php include '../include/footer.php'?>


<?php
session_start();
require '../connect.php';

    ?>

    <?php include '../include/head.php' ?>
    <?php include '../include/header.php' ?>
    <?php include '../include/sidebar.php' ?>


    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn"><i
                                                class="fa fa-search"></i></button>
                                </span>

                </div>
            </form>
            <div class="header-icon">
                <i class="fa fa-tachometer"></i>
            </div>
            <div class="header-title">
                <h1> Dashboard</h1>
                <small> Dashboard features</small>

                <ol class="breadcrumb hidden-xs">
                    <li><a href="#"><i class="pe-7s-home"></i> Home </a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </section>
        <!-- Main content -->

        <section class="content">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number">10</span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Active Teachers </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number">50</span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Active Students</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number">05</span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-user-circle fa-2x"></i>
                                <h4>Subject</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section> <!-- /.content -->


    </div> <!-- /.content-wrapper -->


<?php include '../include/footer.php' ?>

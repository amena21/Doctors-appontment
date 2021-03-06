

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
            <h1>Video</h1>
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
                            <a class="btn btn-primary" href="video-list.php"> <i class="fa fa-list"></i>video List </a>
                        </div>
                    </div>
                    <?php 
                     if(isset($_POST['submit'])){
    
                    $class = @$_POST['class'];

                    $query =  "SELECT * FROM subject WHERE class ='".$class."'";
                     $select_posts = mysqli_query($link,$query);
                      }
                     ?>
                    <div class="panel-body">
                        <form class="col-sm-12" action="" method="post">
                              <div class="col-sm-6 form-group">
                                <label>Class</label>
                                <input type="text" class="form-control" name="class">
                            </div> 
                             <div class="col-sm-6 reset-button">                
                                <input type="submit"class="btn btn-success" name="submit">
                            </div>
                        </form>
                        <form class="col-sm-12" action="file-store.php" method="post" enctype="multipart/form-data">
                            <div class="col-sm-6 form-group">
                                <label>Date</label>
                                  <input type="hidden" class="form-control" name="id">
                                <input type="date" class="form-control" name="date">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Author</label>
                                <input type="text" class="form-control" placeholder="Author" name="author">

                            </div>
                              <div class="col-sm-6 form-group">
                                <label>Class</label>
                                <input type="text" class="form-control" name="class" value="<?php echo $class;?>"readonly>
                            </div> 
                             <div class="col-sm-6 form-group">
                                     <label>Subject</label>
                                    <select  class="form-control" id="exampleSelect1" name="subject">                             
                                    <?php
                                   
                                    while ($row_ah = mysqli_fetch_assoc($select_posts)) {
                                    ?>
                                    <option value="<?php echo $row_ah['subject']; ?>" selected class="test"><?php echo $row_ah['subject']; ?></option>
                                    <?php } ?>

                                    </select>
                                </div>
                      
                            <div class="col-sm-6 form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" placeholder="Title" name="title" >
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Author email</label>
                                <input type="email" class="form-control"  name="a_email" >
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" placeholder="Description" name="des" >
                            </div>
                           
                            <div class="col-sm-12 form-group">
                                <label>Video Link</label>
                                <input type="text" class="form-control" placeholder="Link" name="video" >
                            </div>
                            
                            <div class="col-sm-6 form-group">
                                <label>Assisgnment upload</label>
                                <input type="file" name="file" id="file">
                            </div>
                          
                            <div class="col-sm-12 reset-button">                 
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
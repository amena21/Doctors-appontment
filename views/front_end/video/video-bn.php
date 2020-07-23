
<?php include '../include/header.php'?>
<?php include '../include/menu.php'?>

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
            <h1>Tutorial</h1>
            </div>
            <div class="col-md-5">
                <ol class="breadcrumb pull-right">
                    <li><a href="../user/index.php">Home</a></li>
                    <li><a href="#">Tutorials</a></li>
                    <li class="active">Video</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<!-- Video: film view -->
<section class="content content-light video-film">
<div class="container">
<div class="row">  
        <!-- Video film view - center -->
<?php
require '../connect.php';
error_reporting(0);

 if(isset($_POST['submit'])){
    
$subject = @$_POST['subject'];
}
$query =  "SELECT * FROM t_class_material WHERE subject ='".$subject."' AND class ='".$_GET['class']."'";
$select_posts_t = mysqli_query($link,$query);
?>

<div class="col-md-7">
<nav class="navbar navbar-inverse">
<!-- <div class="container-fluid">  -->   
<form class="col-sm-12" action="" method="post" style="padding-top: 20px;">
<div class="col-sm-6 form-group" >
<select  class="form-control" id="exampleSelect1" name="subject">            <?php
$query = "SELECT * FROM subject WHERE class ='".$_GET['class']."'";
$select_posts = mysqli_query($link,$query);
while ($row_ah = mysqli_fetch_assoc($select_posts)) {
     $s_book = $row_ah['subject'];      
?>                          
<option value="<?php echo $row_ah['subject']; ?>" selected class="test"><?php echo $row_ah['subject']; ?></option>
<?php } ?>
</select>
</div>
<div class="col-sm-6 form-group">                 
<input type="submit" name="submit" value="choose Subject">
</div>
</form>  





<!-- </div> -->
</nav>

<hr class="invisible"/>
<hr class="invisible"/>
<hr class="invisible"/>
<hr class="invisible"/>
<hr class="invisible"/>


<?php  
$query = "SELECT * FROM t_class_material WHERE class ='".$_GET['class']."'";
$select_posts = mysqli_query($link,$query);                          
$row=mysqli_fetch_assoc($select_posts);
$id = $row['id'];
$date = $row['date'];
$class = $row['class'];
$subject = $row['subject'];
$title = $row['title'];
$des = $row['des'];
$author = $row['author'];
$video = $row['video'];
$email = $row['a_email'];
$fileviw = $row['file'];
?>
<article> 
<iframe id="video-file" width="560" height="315" src="<?php echo $video;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <br>                 

<iframe id="jinu" src="" width="83" height="35" style="border:none;overflow:hidden" scrolling="no"  frameborder="0" allowTransparency="true"></iframe>
<!-- <a class="btn btn-theme btn-facebook" href="www.facebook.com"><i class="fa fa-facebook"></i> Share </a> -->
</article>
</div> 
<aside class="col-md-5">
<div class="tabs tabs-justify tabs-tb tabs-alt nobottommargin clearfix" id="realestate-tabs" data-active="1">

<ul class="tab-nav clearfix" style="background-color: #FFAE33;">
        <li><a href="#realestate-tab-1" class="fa fa-youtube-play"> Videos</a></li>
        <li><a href="#realestate-tab-2">Assignment</a></li>
        <li><a href="#realestate-tab-3">Book</a></li>
</ul>
<div class="tab-container">
<div class="tab-content clearfix" id="realestate-tab-1">

<?php   
 if(isset($_POST['submit'])){
    
$subject = @$_POST['subject'];
}
$query =  "SELECT * FROM t_class_material WHERE subject ='".$subject."' AND class ='".$_GET['class']."'";
$select_posts_t = mysqli_query($link,$query);                           
while ($row=mysqli_fetch_assoc($select_posts_t)) {
$id = $row['id'];
$title = $row['title'];
$video = $row['video'];
?>
<ul style=" list-style-type: none; padding-left: 50px">
<li style=" padding: 2px; margin: 2px;"><a class="video-item" href="javascript:void(0)" onclick="setUrl('<?php echo $video;?>')" active="1"><?php echo $title;?></a></li>

</ul> 
<?php }?> 
</div>
<div class="tab-content clearfix" id="realestate-tab-2">
<i><?php echo 'please <a href="../login/user_login.php">login</a> to download Assignment';?></i>
<?php   
 if(isset($_POST['submit'])){
    
$subject = @$_POST['subject'];
}
$query =  "SELECT * FROM t_class_material WHERE subject ='".$subject."' AND class ='".$_GET['class']."'";
$select_posts_t = mysqli_query($link,$query);                         
while ($row=mysqli_fetch_assoc($select_posts_t)) {
$id = $row['id'];
$title = $row['title'];
$fileviw = $row['file'];
?>  

<ul style=" list-style-type: none; padding-left: 50px">
<li style=" padding: 2px; margin: 2px;">
<a href=""><?php echo $title.' '.'Assignment'.'<br>';?></a></li>
</ul>
<?php } ?>     
</div>

<div class="tab-content clearfix" id="realestate-tab-3">
<?php 

$list = mysqli_query($link,"SELECT * FROM book WHERE class ='".$_GET['class']."' AND subject ='".$subject."' ");
while ($row_ah = mysqli_fetch_assoc($list)) {
 ?>
      
<a href="../../admin-panel/teacher/book/<?php echo $row_ah['file'];?>"><?php echo $row_ah['subject'].' '.'Book'.'<br>';?></a> 

<?php }?>          
</div> 
</div>
</div>
<div class="clear"></div>
</aside>
</div>    
</div>
</section>
</body>
<?php include '../include/footer.php' ?>
<script type="text/javascript" src="../../../resource/front-end/asset/js/jquery.js"></script>

<!-- Bootstrap Select Plugin -->
<script type="text/javascript" src="../../../resource/front-end/asset/js/bs-select.js"></script>

<!-- Bootstrap Switch Plugin -->

<!-- Range Slider Plugin -->
<script type="text/javascript" src="../../../resource/front-end/asset/js/rangeslider.min.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="../../../resource/front-end/asset/js/functions.js"></script>


<script>

    jQuery(document).on('ready', function(){

        $(".price-range-slider").ionRangeSlider({
            type: "double",
            prefix: "$",
            min: 200,
            max: 10000,
            max_postfix: "+"
        });
        $(".area-range-slider").ionRangeSlider({
            type: "double",
            min: 50,
            max: 20000,
            from: 50,
            to: 20000,
            postfix: " sqm.",
            max_postfix: "+"
        });
        jQuery(".bt-switch").bootstrapSwitch();
    });
</script>
<script>



function setUrl(url) {
// alert("something");
$("#video-file").attr("src", url);
};
</script>


  <script>
   function myFunction() {
   var x = document.URL;
   document.getElementById("jinu").src = 'https://www.facebook.com/plugins/share_button.php?href='+x+'&layout=button_count&size=large&mobile_iframe=true&width=83&height=35&appId';
  }
  </script>
<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
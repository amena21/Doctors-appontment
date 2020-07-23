
<?php
include'../connect.php';

$id= $_GET['id'];
$query = "DELETE FROM subject WHERE id='$id'";
$data =mysqli_query($link,$query);
if($data){
 echo "<script>alert('Data deleted')</script>";
 ?>
 
 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/online_learning/views/admin-panel/admin/subject/sub-list.php">
<?php 
}else{
echo "<font color='red'>Faild";
}
?>
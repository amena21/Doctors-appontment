<?php

require '../connect.php'; 

if(isset($_POST['submit'])){
$id = @$_POST['id'];
$s_name = @$_POST['s_name'];
$s_date = @$_POST['s_date'];
$class = @$_POST['class'];
$subject = @$_POST['subject'];
$s_email = @$_POST['s_email'];
$email = @$_POST['st_email'];
$topics = @$_POST['topics'];


$file_dir = "Assfile/";
$file = $file_dir. basename($_FILES["file"]["name"]);
$uploadOk = 1;    
$fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
$filemov = move_uploaded_file($_FILES["file"]["tmp_name"], $file);



    if($s_name&&$s_date&&$class&&$subject&&$s_email&&$email&&$topics&&$file){

        

    	$sql = "INSERT INTO `online_learning`.`assignment` (`id`,`s_name`,`s_date`,`class`,`subject`,`s_email`,`st_email`,`topics`,`file`) VALUES ('','$s_name','$s_date','$class','$subject','$s_email','$email','$topics','$file')";        
         if (mysqli_query($link, $sql)) {
                        echo "Success!!Your data have been interted.";
                        header("Location:ass-list.php");
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    mysqli_close($link);
        } 
    else{
        echo 'please fill all the field';
    }
}
?>





<?php

require '../connect.php';


if(isset($_POST['submit'])){
	

$class = @$_POST['class'];
$subject = @$_POST['subject'];

$author = @$_POST['author'];

$email = @$_POST['t_email'];
$file_dir = "book/";
$file = $file_dir. basename($_FILES["file"]["name"]);
$uploadOk = 1;    
$fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
$filemov = move_uploaded_file($_FILES["file"]["tmp_name"], $file);



    if($class&&$subject&&$author&&$email&&$file){

        

    	$sql = "INSERT INTO `online_learning`.`book` (`id`, `class`, `subject`, `author`, `t_email`,`file`) VALUES ('', '$class', '$subject', '$author', '$email','$file')";        
         if (mysqli_query($link, $sql)) {
                        echo "Success!!Your data have been interted.";
                        header("Location:book-list.php");
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





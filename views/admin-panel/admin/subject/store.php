
<?php
require '../connect.php';
if(isset($_POST['submit'])){
$class =@$_POST['class'];
$subject = @$_POST['subject'];
     
     $sql = "INSERT INTO `subject`(`id`, `class`, `subject`) VALUES('', '$class', '$subject')";    

      
        if (mysqli_query($link, $sql)) {
                    echo "Success!!Your data have been inserted.";
                    header("Location:sub-list.php");
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    mysqli_close($link);
        
    
}
?>





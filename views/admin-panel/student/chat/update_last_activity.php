<?php

//update_last_activity.php

include('conn.php');

session_start();
$query_id= "SELECT * from users where email='".$_SESSION["email"]."'";

 $statement = $connect->prepare($query_id);

$statement->execute();

$result = $statement->fetchAll();
foreach($result as $row){
$id = $row['id'];
}

$query = "
UPDATE users 
SET last_activity = now() 
WHERE id = '".$id."'
";

$statement = $connect->prepare($query);

$statement->execute();

?>
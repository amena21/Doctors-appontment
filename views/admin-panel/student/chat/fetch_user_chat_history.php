<?php

//fetch_user_chat_history.php

include('conn.php');


session_start();
$query_id= "SELECT * from users where email='".$_SESSION["email"]."'";

 $statement = $connect->prepare($query_id);

$statement->execute();

$result = $statement->fetchAll();
foreach($result as $row){
$id = $row['id'];
}


echo fetch_user_chat_history($id, $_POST['to_user_id'], $connect);

?>
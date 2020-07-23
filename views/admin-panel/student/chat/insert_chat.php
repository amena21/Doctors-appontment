<?php

//insert_chat.php

include('conn.php');

session_start();
$query_id= "SELECT * from users where email='".$_SESSION["email"]."'";

 $statement = $connect->prepare($query_id);

$statement->execute();

$result = $statement->fetchAll();
foreach($result as $row){
$id = $row['id'];
}

$data = array(
 ':to_user_id'  => $_POST['to_user_id'],
 ':from_user_id'  => $id,
 ':chat_message'  => $_POST['chat_message'],
 ':status'   => '1'
);

$query = "
INSERT INTO chat_message 
(to_user_id, from_user_id, chat_message, status) 
VALUES (:to_user_id, :from_user_id, :chat_message, :status)
";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
 echo fetch_user_chat_history($id, $_POST['to_user_id'], $connect);
}

?>

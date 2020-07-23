<?php

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=online_learning", "root", "");

date_default_timezone_set('Asia/Dhaka');

function fetch_user_last_activity($email, $connect)
{
 $query = "
 SELECT * FROM t_reg 
 WHERE email = '$email' 
 ORDER BY last_activity DESC 
 LIMIT 1
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row['last_activity'];
 }
}

?>
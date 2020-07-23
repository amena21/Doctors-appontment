<?php
session_start();
session_destroy();
 header("Location: ../../front_end/user/index.php");
?>
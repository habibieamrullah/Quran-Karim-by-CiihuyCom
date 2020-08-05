<?php
$connection = mysqli_connect("localhost", "dbuser", "dbpassword", "dbtable");
//$connection->set_charset("utf8");
mysqli_set_charset($connection,'utf8');
?>
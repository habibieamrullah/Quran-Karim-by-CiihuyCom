<?php
$connection = mysqli_connect("localhost", "databaseusername", "databasepassword", "databasename");
//$connection->set_charset("utf8");
mysqli_set_charset($connection,'utf8');
?>
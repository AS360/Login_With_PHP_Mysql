<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assesment";

$dbconn = mysqli_connect($servername, $username, $password, $dbname);
if(!$dbconn) {
      echo "Database not conected!";
      die();
}

?>
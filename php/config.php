<?php
 $hostname = "localhost";
 $username = "root";
 $password = "";
 $dbname = "chatapp";

 $conn = mysql_connect($hostname, $username, $password,  $dbname);
 if(!$conn){
    echo "database connection error" .mysql_connect_error();
 }
?>
<?php

try{
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'tempah';

  $conn = new PDO("mysql:host=".$host.";dbname=".$dbname , $username , $password);
  // echo "Connect<br>";
} catch (PDOException $e) {
  echo "error".$e->getMessage();
}
 ?>

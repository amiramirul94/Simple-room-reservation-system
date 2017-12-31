<?php
include 'conn.php';
include 'function.php';

echo "<br>Tarikh = ".$masa = $_GET['dateH'];
echo "<br>Hari = ".$hari = $_GET['dayD'];

func::checkDate($conn, $masa, $hari);


 ?>

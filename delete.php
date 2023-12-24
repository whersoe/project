<?php

require_once ('config/connect.php');

$ID = $_POST['id2'];


$sql = "DELETE FROM `goods` WHERE `id` = '$ID'";

$connect -> query ($sql); 



header ('location: index.php');

?>
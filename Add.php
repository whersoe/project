<?php
require_once ('config/connect.php');
$name = $_POST['name'];
$type = $_POST['type'];
$cabinet = $_POST['cabinet'];

$sql = "INSERT INTO `goods`(`name`, `type`, `abinet`) VALUES ('$name','$type','$cabinet')";

$connect -> query ($sql);





header ('location: index.php');
?>


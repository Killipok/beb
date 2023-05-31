<?php 
session_start();
require_once '../include/connect.php';

$title = $_POST['title'];
$ingredients = $_POST['ingredients'];
$Instruction = $_POST['Instruction'];
$filename = $_FILES['filename']['name'];
$time = $_POST['time'];
$amount = $_POST['amount'];


move_uploaded_file($_FILES['filename']['tmp_name'], '../recipe_img/' . $_FILES['filename']['name']);

$add = mysqli_query($connection, "INSERT INTO `recipe` (`id`,`title`, `ingredients`, `Instruction`, `filename`, `time`, `amount`) VALUES (NULL,'$title', '$ingredients', '$Instruction', '$filename', '$time', '$amount')");

$new_url = '../profile.php';
header('Location: '.$new_url);




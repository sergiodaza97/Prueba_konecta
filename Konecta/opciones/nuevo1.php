<?php
require_once('../dbprueba.php');
$pdo = getPdo();
$name = $_POST['name'];
$reference = $_POST['reference'];
$value = $_POST['value'];
$weight = $_POST['weight'];
$category = $_POST['category'];
$stock = $_POST['stock'];
$url = $_POST['url'];
$date_created = date("Y-m-d");
//print_r($name, $reference, $value, $weight, $category, $stock, $date_created, $url);
$sqlInsertId = "INSERT INTO stocktaking (name,reference,value,weight,category,stock,created_at,url) 
VALUES (?,?,?,?,?,?,?,?);";
$consulta = $pdo->prepare($sqlInsertId);
$consulta->execute([$name,$reference,$value,$weight,$category,$stock,$date_created,$url]);

header('location: ../index.php');
?>

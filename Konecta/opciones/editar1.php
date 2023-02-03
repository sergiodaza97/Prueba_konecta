<?php 
require_once('../dbprueba.php');
$pdo=getPdo();

$id = $_GET['id'];
$name = $_POST['name'];
$reference = $_POST['reference'];
$value = $_POST['value'];
$weight = $_POST['weight'];
$category = $_POST['category'];
$stock = $_POST['stock'];
$url = $_POST['url'];


$sqlid = "UPDATE stocktaking SET  name = ?, reference = ?, value = ?, weight = ?, category = ?, stock = ?, url = ? WHERE id = ?";
$consulta = $pdo->prepare($sqlid);
$consulta->execute([$name,$reference,$value,$weight,$category,$stock,$url,$id]);

header('location: ../index.php');

?>
<?php
require_once('../dbprueba.php');
$pdo=getPdo();

$id = $_GET['id'];

$sql = "DELETE FROM stocktaking WHERE id = ?";
$query = $pdo->prepare($sql);
$query->execute([$id]);


header('location:../index.php');


?>
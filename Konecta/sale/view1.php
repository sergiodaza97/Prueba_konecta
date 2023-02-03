<?php 
require_once('../dbprueba.php');
$pdo=getPdo();

$id = $_GET['id'];
$sale = $_POST['sale'];
$sql = "SELECT * FROM stocktaking WHERE id= ?";
$query = $pdo->prepare($sql);
$query->execute([$id]);
$product=$query->fetchALL(PDO::FETCH_ASSOC);
foreach ($product as $key) {
    if ($sale > $key['stock']) {
        echo '<script> alert ( "No existen unidades suficientes para la venta") </ script>';
    }else{
        $new_stock = $key['stock'] - $sale;
        $sqlid = "UPDATE stocktaking SET stock = ? WHERE id = ?";
        $consulta = $pdo->prepare($sqlid);
        $consulta->execute([$new_stock,$id]);
    }
}

header('location: ../index.php');



?>
<?php

require_once('./dbprueba.php');
$pdo=getPdo();


$sql = "SELECT * FROM stocktaking";
$query = $pdo->prepare($sql);
$query->execute();
$stocktaking=$query->fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body background="https://images.adsttc.com/media/images/5ca7/72d5/284d/d153/3000/01f3/medium_jpg/UC8A1834.jpg?1554477741">
<article>
            <div class="pad_left1">
              <h1 style="margin-left: auto;padding: 10px 10px 10px 10px;">Cafeteria Konecta</h1>
              <a href="./opciones/nuevo.php" class="btn btn-primary" style="margin-left: 14px;padding: 10px 10px 10px 10px;"><p>Nuevo Producto</p></a>
            <div></br>
                
        <table class="table table-dark table-striped" style="width: auto;margin-left: auto;
            margin-right: auto;" >
            <tr>
                <td scope="col"><h6>id</h6></td>
                <td scope="col"><h6>Nombre de producto</h6></td>
                <td scope="col"><h6>Referencia</h6></td>
                <td scope="col"><h6>Precio</h6></td>
                <td scope="col"><h6>Peso</h6></td>
                <td scope="col"><h6>Categoría</h6></td>
                <td scope="col"><h6>Stock</h6></td> 
                <td scope="col"><h6>Fecha de creación</h6></td>
                <td scope="col"><h6>Opciones</h6></td>
            </tr>
            <?php 
            foreach($stocktaking as $product){ ?>
            <tr>
                <td><?php echo $product ['id'] ?></td>
                <td><a href="./sale/<?php echo "view.php?id=".$product['id']; ?>"><?php echo $product ['name'] ?></a></td>
                <td><?php echo $product ['reference'] ?></td>
                <td>$<?php echo $product ['value'] ?></td>
                <td><?php echo $product ['weight'] ?>Kg</td>
                <td><?php echo $product ['category'] ?></td>
                <td><?php echo $product ['stock'] ?></td>
                <td><?php echo $product ['created_at'] ?></td>
                <td><a href="./opciones/<?php echo "eliminar.php?id=".$product['id']; ?>" class="btn btn-outline-danger eliminar"><i class="bi bi-trash-fill" title="Borrar" class="btn btn-danger"></i></a><br>
                <a href="./opciones/<?php echo "editar.php?id=".$product['id']; ?>" class="btn btn-outline-warning"><i class="bi bi-pencil-square" title="Editar" class="btn btn-warning"></i></a></td>
            </tr>
            <?php } ?> 
        </table> 
            </div>
          </article>
          <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
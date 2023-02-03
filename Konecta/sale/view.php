<?php
require_once('../dbprueba.php');
$pdo=getPdo();

$id = $_GET['id'];
$sql = "SELECT * FROM stocktaking WHERE id= ?";
$query = $pdo->prepare($sql);
$query->execute([$id]);
$product=$query->fetchALL(PDO::FETCH_ASSOC);
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
    <body background="https://estudioniddo.com/wp-content/uploads/2018/11/bar-1200x900-1-1200x801.jpg">
        <section>
        <main>
            <h2 style="margin-left: auto;padding: 10px 10px 10px 10px;">PRODUCTO</h2>
            <a href="../index.php" class="btn btn-warning" style="margin-left: 14px;padding: 10px 10px 10px 10px;"><i class="bi bi-box-arrow-in-up-left type">Volver</i></a>
            <div class="">
                <?php foreach ($product as $key) { ?>
                    <h3 class="name"><?php echo $key['name']; ?></h3>
                    <div style="text-align: center;">
                            <img src="<?php echo $key['url']; ?>"
                                width="400"
                                height="341"
                                title="<?php echo $key['reference']; ?>" class="image" >
                                <span class="text">
                                    <span><strong>Precio:</strong> $<?php echo $key['value']; ?></span>
                                    <span><strong>Stock:</strong> <?php echo $key['stock']; ?></span>
                                </span></br>
                            </div></br>
                            <form id="ContactForm" action="view1.php?id=<?php echo $_GET['id']?>" method="post" id="Registro">
                                <span style="text-align: center;">
                                    <div class="text">Unidades a vender:</div>
                                    <input type="number" name="sale" class="input">
                                </span>
                                <input type="submit" value="Vender" class="btn btn-success">
                            </form>
                    <a href=""><i class="fas fa-cart-plus"></i></a>
                <?php } ?>
            </div>
        </main>
        </section>
    </body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
<style>
    .name{
        margin: revert;
        text-align: center;
        font-size: 35px;
    }
    .image{
        vertical-align: text-top;  
    }
    .type{
        font-style: serif;
    }
    .text{
        font-size: 20px;
        margin-left: 10px;
    }
    .input{
        width: 250px;
        margin-left: 400px;
    }
</style>
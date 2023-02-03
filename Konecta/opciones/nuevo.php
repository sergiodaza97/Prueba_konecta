
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
<body background="https://escueladeantienvejecimiento.com/wp-content/uploads/2020/12/black-bird-cafeteria-de-especialidad-valencia-1.jpg">
<article >
            <div class="pad_left1">
            <h1 style="margin-left: auto;padding: 10px 10px 10px 10px;">Nuevo Producto</h1></br></br>
              <form id="ContactForm" action="nuevo1.php" method="post" id="Registro">
                <div style="text-align: center;">
                  <div  class="wrapper"> <strong class="letter">Nombre del Producto:</strong><br>
                    <div class="bg">
                      <input type="text" name="name" class="input" >
                    </div>
                  </div>
                  <div  class="wrapper"> <strong class="letter">Referencia:</strong><br>
                    <div class="bg">
                      <input type="text" name="reference" class="input" >
                    </div>
                  </div>
                  <div  class="wrapper"> <strong class="letter">Precio:</strong><br>
                    <div class="bg">
                      <input type="number" name="value" class="input" >
                    </div>
                  </div>
                  <div  class="wrapper"> <strong class="letter">Peso:</strong><br>
                    <div class="bg">
                      <input type="number" name="weight" class="input" >
                    </div>
                  </div>
                  <div  class="wrapper"> <strong class="letter">Categoria:</strong><br>
                    <div class="bg">
                    <select name="category" class="select">
                    <option value="">Seleccione una categria</option>
                      <option value="Pasteleria">Pasteleria</option>
                      <option value="Panadería">Panadería</option>
                      <option value="Bebidas">Bebidas</option>
                      <option value="Otro">Otro</option>
                    </select> 
                    </div>
                  </div></br>
                  <div  class="wrapper"> <strong class="letter">Stock:</strong><br>
                    <div class="bg">
                      <input type="number" name="stock" class="input" >
                    </div>
                  </div>
                  <div  class="wrapper"> <strong class="letter">URL:</strong><br>
                    <div class="bg">
                      <input type="text" name="url" class="input" >
                    </div>
                  </div>
                  <div>
                    <input type="submit" class="input-group-text center" value="Crear" class="btn btn-success"> 
                    <a href="../index.php" class="btn btn-warning" style="width: auto;"><i class="bi bi-box-arrow-in-up-left type">Volver</i></a>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </article>
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<style>
.input{
  width: 350px;
  text-align: center;
}
.select{
  width: 350px;
  text-align: left;
}
.letter{
  font-size: 25px;
}
.center{
  margin: auto;
  width: 85px;
  font-size: 18px;
}
.type{
  font-style: serif;
}
</style>
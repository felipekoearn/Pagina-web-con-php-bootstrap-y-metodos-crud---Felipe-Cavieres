<?php
    if($_POST){
        header('location:index.php');
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <br><br><br><br><br><br><br><br>
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form method="POST">
                        <div class = "form-group">
                        <label for="exampleInputEmail1">Usuario</label>
                        <input type="text" class="form-control" name="usuario" aria-describedby="emailHelp" placeholder="Ingrese nombre de usuario">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" placeholder="Ingrese Contraseña">
                        </div>

                        <button type="submit" class="btn btn-primary">Ingresar</button>
                        </form>
                        
                        
                    </div>
                    
                </div>
            </div>
            
        </div>
      </div>
  </body>
</html>
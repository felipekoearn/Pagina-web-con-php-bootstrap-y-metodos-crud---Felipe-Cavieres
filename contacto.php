<?php include("template/cabecera.php")?>

    <form>
    <p class="text-center">Contactenos y le damos su presupuesto!</p>    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Nombre</label>
        <input type="text" class="form-control" id="Nombre_box" placeholder="Ingrese su nombre">
        </div>
        <br>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Apellido</label>
        <input type="text" class="form-control" id="Apellido_box" placeholder="Ingrese su apellido">
        </div>
        <br>
    </div>
    <div class="form-group">
        <label for="inputAddress">Direccion</label>
        <input type="text" class="form-control" id="Direccion_box" placeholder="Ej: Alameda 0000 - santiago">
    </div>
    <br>
    <div class="form-group">
        <label for="inputAddress2">Telefono o Celular</label>
        <input type="text" class="form-control" id="Celular_box" placeholder="Ej: +569 99992222">
    </div>
    <br>
    <div class="form-group">
        <label for="inputAddress2">Correo Electronico</label>
        <input type="email" class="form-control" id="Email_box" placeholder="Example@gmail.com">
    </div>
    <br>
    <div class="form-group">
        <label for="inputAddress2">Escriba brevemente que desea</label>
        <input type="text" class="form-control" id="Celular_box" placeholder="Ej: Escriba aqui">
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary">Enviar Cotizacion</button>
    </form>
<?php include("template/pie.php")?>
<?php include 'header.php'; ?>
<div class="container sipadding container-default-height">
    <div class="row">
        
   
    <form class="form-horizontal col-4" method="POST" id="cform" action="index.php">
        <div class="modal-header">
            <h5 class="modal-title" id="noteModalLabel">Registro</h5>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre Completo: </label>
                <input type="text" class="form-control" id="textNombre" name="textNombre" placeholder="Full name">
                <small id="nombreAyuda" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Correo Electronico (E-mail): </label>
                <input type="email" class="form-control" id="textCorreo" name="textCorreo" aria-describedby="emailHelp" placeholder="Enter email" value="">
                <small id="emailHelp" class="form-text text-muted">Ingresa la direccion de tu correo, tu informacion estara en total privacidad.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña: </label>
                <input type="password" class="form-control" id="textPassword" name="textPassword" placeholder="Password">
                <small id="passwordAyuda" class="form-text text-muted"></small>
            </div>
        </div>
        <div class="modal-footer">
            <input type="hidden" value ="insert"  name="raction">
            <input type="submit" class="btn badge-primary" value="Crear cuenta" id="btnCrearCuenta">
        </div>
       
    </form>
    <div>
        
    </div>     
         
    </div>
</div>

<?php include 'footer.php';
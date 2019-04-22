<?php include 'header.php'; ?>

<div class="container sipadding container-default-height">


    <div class="row">
        <form class="form-horizontal col-4" action="index.php" id="lform" method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="noteModalLabel">Login</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo Electronico (E-mail): </label>
                    <input type="email" class="form-control" id="textCorreo" name="textCorreo" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña: </label>
                    <input type="password" class="form-control" id="textPassword" name="textPassword" placeholder="Password">
                    <small id="passwordAyuda" class="form-text text-muted"></small>
                </div>

            </div>
            <div class="modal-footer">
                <input type="hidden" value ="login" name="laction">
                <input type="submit" class="btn badge-primary" value="Login" id="btnLogin"/>
            </div>
        </form>
    </div>
   
</div>


<?php include 'footer.php'; 

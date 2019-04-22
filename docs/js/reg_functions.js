
$("#btnCrearCuenta").click(function () {
    var correo = $("#textCorreo").val();
    var password = $("#textPassword").val();
    var nombre = $("#textNombre").val();

    if (password.length < 6) {
        $('#passwordAyuda').html('La contraseña debe contener almenos 6 caracteres.');
        $('#textPassword').focus();
        return false;
    }
    $('#passwordAyuda').html('');
    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
    
    if (caract.test(correo) == false) {
        $('#emailHelp').html('La dirección ingresada no es valida, Revisa tu direción por favor.');
        $('#textCorreo').focus();
        return false;
    }
    $('#emailHelp').html('Ingresa la direccion de tu correo, tu informacion estara en total privacidad.');

    if (nombre.length < 3) {
        $('#nombreAyuda').html('Este campo no debe estar en blanco');
        $('#textNombre').focus();
        return false;
    }
    $('#nombreAyuda').html('');
    
    $.post("index.php", $('#cform').serializeArray());
});
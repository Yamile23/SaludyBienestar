<?php
include_once 'Usuario.php';
include_once 'Connection.php';
include_once 'UsuarioBLL.php';

$usuarioBLL = new UsuarioBLL();

$peticion;
$login;
if (isset($_POST['raction']) == 'insert') {
    $peticion = $usuarioBLL->registrar($_POST['textNombre'], $_POST['textCorreo'], $_POST['textPassword'], 'inactivo');
    if ($peticion == 'error') {
        header('Location: cuenta_verificacion.php');
    }
}
if (isset($_POST['laction']) == 'login') {
    $login = $usuarioBLL->login($_POST['textCorreo'], $_POST['textPassword']);
    if ($login == 'error' or $login == 'incorrecto') {
        header('Location: login_verificacion.php');
    }
}
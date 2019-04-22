<?php

class UsuarioBLL {

    function registrar($nombre, $correo, $password, $estado) {
        $encrypt_password = base64_encode($password);
        $connection = new Connection();
        try {
            $query = $connection->queryWithParams('INSERT INTO tbl_usuario (nombre, correo, password, estado) VALUES (:varNombre, :varCorreo, :varPassword, :varEstado)', array(':varNombre' => $nombre, ':varCorreo' => $correo, ':varPassword' => $encrypt_password, ':varEstado' => $estado));
            return $connection->getLastInsertedId();
            
        } catch (Exception $ex) {
            return 'error';
        }
    }

    function login($correo, $password) {
        $connection = new Connection();
        $query = $connection->queryWithParams('SELECT password FROM tbl_usuario WHERE correo = :varCorreo', array(':varCorreo' => $correo));
        $query->setFetchMode(PDO::FETCH_ASSOC);
        
        if($query->rowCount() == 0) {
            return 'error';
        }  
        $dbpassword;
        foreach ($query as $row) {
            $dbpassword= $row['password'];
        }
        $despassword = base64_decode($dbpassword);
        
        if($despassword == $password){
            return 'ok';
        }
        return 'incorrecto';
    }

}

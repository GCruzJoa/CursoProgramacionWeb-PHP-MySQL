<?php
    $realname   = $_POST['realname'];
    $nick       = $_POST['nick'];
    $password   = $_POST['password'];
    $rpass      = $_POST['rpass'];
    $reqlen     = strlen($nick) * strlen($password) * strlen($rpass);
    if($reqlen > 0) {
        if ($password === $rpass) {
            require ("connect_db.php");
            $password = md5($password);
            mysql_query("insert into formularioregistro values ('','$realname','nick','password')");
            mysql_close($link);
        }
        else {
            echo 'Los passwords no coinciden, ingrese passwords identicos.';
        }
    }
    else{
        echo 'Rellene los campos requeridos.';
    }
?>
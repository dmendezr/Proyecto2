<?php

/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 14/8/2016
 * Time: 12:34 PM
 */
class Login extends Conectar
{

    public function verificarUserPass($user, $pass) {
        try {
            $sql = "SELECT * FROM u384523145_prpii.persona where usuario = '".$user."' and pass='".$pass."'";
            $query = mysqli_query(self::conectar(), $sql);

            while ($queryData = mysqli_fetch_assoc($query)) {
                $this->resultado = $queryData;
            }
            return $this->resultado;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function doLogin($user, $pass) {
        $resultado = $this->verificarUserPass($user, $pass);

        if(!empty($resultado)) {
            session_start();

            $_SESSION['Cedula'] = $resultado['Cedula'];
            $_SESSION['Nombre'] = $resultado['Nombre'];
            $_SESSION['Apellido1'] = $resultado['Apellido1'];

            header("Location: ../indexConfig.php");
        } else {
            header("Location: ../login.php?error=usuario-no-encontrado");
        }

    }

    public function doLogout() {
        session_start();
        session_destroy();

        header("Location: ../login.php");
    }

}
<?php

/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 2/8/2016
 * Time: 2:44 PM
 */
class Editar extends Conectar
{
    public function updatePersona ($id,$nombre, $apellido1, $apellido2, $fechaNacimiento, $codigoPostal, $Sexo, $edad){
        if($nombre != '' && $apellido1 != '' && $apellido2 != '' && $fechaNacimiento != '' && $codigoPostal != '' && $Sexo != '' && $edad != ''){
            try{
                $sql = "UPDATE `u384523145_prpii`.`persona` SET `codigo_postal`='".$codigoPostal."', `Nombre`='".$nombre."', `Apellido1`='".$apellido1."', 
                `Apellido2`='".$apellido2."', `Sexo`='".$Sexo."', `FechaNacimiento`='".$fechaNacimiento."', 
                `Edad`='".$edad."' WHERE `Cedula`='".$id."'";
                return mysqli_query(self::conectar(),$sql);
            }catch (Exception $e){
                echo $e -> getMessage();
                exit();
            }
        }
    }

    public function updateEstadoColumnaPersona($id,$estadoColumna)
    {
        if ($id != '' && $estadoColumna != ''  ) {
            try {
                $sql = "UPDATE `u384523145_prpii`.`persona` SET `sexoColumna`='".$estadoColumna."' WHERE `Cedula`='".$id."';" ;
                return mysqli_query(self::conectar(), $sql);
            } catch (Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }
    }
}
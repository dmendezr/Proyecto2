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

    public function updateEscolaridad($id,$inst,$titulo,$annoIni, $annoFin,$observaciones )
    {
        if ($inst != '' && $titulo != '' && $annoIni != '' && $annoFin != '' && $id != '') {
            try {
                $sql = "UPDATE `u384523145_prpii`.`escolaridad` SET `InstitucionEduc`='".$inst."', `TituloObtenido`='".$titulo."', `AñoInicio`='".$annoIni."', `AñoCulminacion`='".$annoFin."', `Observaciones`='".$observaciones."' WHERE `ID`='".$id."'";
                return mysqli_query(self::conectar(), $sql);
            } catch (Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }
    }

    public function  updateDireccion ($id,$pais,$provincia,$canton,$distrito,$direccionExacta){
        if ($pais != '' && $provincia != '' && $canton!= '' && $distrito != '' && $direccionExacta != '' && $id != '') {
            try {
                $sql = "UPDATE `u384523145_prpii`.`direccion` SET `Pais`='".$pais."', `Provincia`='".$provincia."', `Canton`='".$canton."', `Distrito`='".$distrito."', `DireccionExacta`='".$direccionExacta."' WHERE `ID`='".$id."'";
                return mysqli_query(self::conectar(), $sql);
            } catch (Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }
    }


    public function updateLogros($id_logro,$logro,$descripcion)
    {
        if ($id_logro != '' && $logro != '' && $descripcion != '') {
            try {
                $sql = "UPDATE `u384523145_prpii`.`logros` SET `logro`='".$logro."', `descripcion`='".$descripcion."' WHERE `id_logro`='".$id_logro."'";
                return mysqli_query(self::conectar(), $sql);
            } catch (Exception $e) {
                return $e->getMessage();
                exit;
            }
        }
    }

}
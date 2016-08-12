<?php

/**
 * Created by PhpStorm.
 * User: dmendezr
 * Date: 12/08/2016
 * Time: 12:30 PM
 */
class Ingresar extends Conectar
{
    public function insertEscolaridad($cedula,$inst,$titulo,$annoIni, $annoFin,$observaciones )
    {
        if ($inst != '' && $titulo != '' && $annoIni != '' && $annoFin != '' && $cedula != '') {
            try {
                $sql = "INSERT INTO `u384523145_prpii`.`escolaridad` (`InstitucionEduc`, `TituloObtenido`, `AñoInicio`, `AñoCulminacion`, `Observaciones`, `Cedula`) VALUES ('".$inst."', '".$titulo."', '".$annoIni."', '".$annoFin."', '".$observaciones."', '".$cedula."');";
                return mysqli_query(self::conectar(), $sql);
            } catch (Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: dmendezr
 * Date: 12/08/2016
 * Time: 04:47 PM
 */
class Eliminar extends Conectar
{

    public function deleteEscolaridad($id)
    {
        if ($id != '') {
            try {
                $sql = "DELETE FROM `u384523145_prpii`.`escolaridad` WHERE `ID`='".$id."';";
                return mysqli_query(self::conectar(), $sql);
            } catch (Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }
    }

}
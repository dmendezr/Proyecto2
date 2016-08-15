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

    public function deleteGaleria($id)
    {
        if ($id != '') {
            try {
                $sql = "DELETE FROM `u384523145_prpii`.`galeria` WHERE `idgaleria`='".$id."'";
                return mysqli_query(self::conectar(), $sql);
            } catch (Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }
    }

<<<<<<< HEAD
    public function deletePasatiempo($id)
    {
        if ($id != '') {
            try {
                $sql = "DELETE FROM `u384523145_prpii`.`pasatiempos` WHERE `id_pasatiempo`='".$id."'";
=======
    public function deleteLogros($id)
    {
        if ($id != '') {
            try {
                $sql = "DELETE FROM `u384523145_prpii`.`logros` WHERE `id_logro`='".$id."'";
>>>>>>> origin/master
                return mysqli_query(self::conectar(), $sql);
            } catch (Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }
    }

}
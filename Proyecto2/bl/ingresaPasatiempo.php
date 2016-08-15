<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 15/8/2016
 * Time: 9:09 AM
 */
include '../php/conectar.php';
include '../php/ingresar.php';

if(isset($_POST['id'])) {
    $id = $_POST['id'];
}

if(isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
}

if(isset($_POST['descripcion'])) {
    $descripcion = $_POST['descripcion'];
}

$target_path = "../pasatiempos/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))
{
//      echo "<span style='color:green;'>El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido</span><br>";
    $ruta = "pasatiempos/" . basename( $_FILES['uploadedfile']['name']);
    $ingresar = new Ingresar();
    if ($ingresar -> insertPasatiempos($nombre,$ruta,$descripcion,$id)){

        header("Location: ../confPasatiempos.php?id=".$id);
    }else{
        header("Location: ../confPasatiempos.php?error=true");
    }
}else{
    echo "Ha ocurrido un error, trate de nuevo!";
}
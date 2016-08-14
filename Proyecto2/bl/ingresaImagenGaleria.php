<?php
/**
 * Created by PhpStorm.
 * User: Roger
 * Date: 14/8/2016
 * Time: 12:50 AM
 */
include '../php/conectar.php';
include '../php/ingresar.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$target_path = "../pictures/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))
{
//      echo "<span style='color:green;'>El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido</span><br>";
      $ruta = "pictures/" . basename( $_FILES['uploadedfile']['name']);
      $ingresar = new Ingresar();
      if ($ingresar -> insertGaleria($ruta,$id)){

          header("Location: ../confGaleria.php?id=".$id);
      }else{
          header("Location: ../confGaleria.php?error=true");
      }
}else{
    echo "Ha ocurrido un error, trate de nuevo!";
}
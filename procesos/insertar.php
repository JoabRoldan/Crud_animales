<?php 
session_start();
include "../clases/Conexion.php";
include "../clases/Crud.php";

$Crud = new Crud();

$datos = array(
    "nombre_mascota" => $_POST['nombre_mascota'],
    "edad" => $_POST['edad'],
    "especie" => $_POST['especie'],
    "raza" => $_POST['raza'],
    "nombre_dueño" => $_POST['nombre_dueño']
);

$respuesta = $Crud->insertarDatos($datos);

if ($respuesta->getInsertedId() > 0) {
    $_SESSION['mensaje_crud'] = 'insert';
    header("location:../index.php");
} else {
    print_r($respuesta);
}
?>

<?php
print_r($_POST);

$nombre_animal = $_POST['nombre_animal'];
$descripcion_animal = $_POST['descripcion_animal'];
$id_clasificacion = $_POST['id_clasificacion'];
$id_alimentacion = $_POST['id_alimentacion'];
$id_habitat = $_POST['id_habitat'];
$id_animal = $_POST['id_animal'];

include('../connection/connection.php');

$consulta = " CALL p_actualizarAnimal('$nombre_animal','$descripcion_animal', '$id_clasificacion', '$id_alimentacion', '$id_habitat', '$id_animal')";

//$consulta = "UPDATE animal SET nombre_animal = $nombre_animal, descripcion_animal = $descripcion_animal, WHERE id_animal = $id_animal";


$query = mysqli_query($conn,$consulta);

header('Location: ../animal.php');
?>
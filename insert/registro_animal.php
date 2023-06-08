<?php

    //print_r($_POST);

    $nombre_animal = $_POST['nombre_animal'];
    $descripcion_animal = $_POST['descripcion_animal'];
    $id_clasificacion = $_POST['id_clasificacion'];
    $id_alimentacion = $_POST['id_alimentacion'];
    $id_habitat = $_POST['id_habitat'];


    include('../connection/connection.php');

    $consulta = " CALL p_registroAnimal('$nombre_animal','$descripcion_animal', '$id_clasificacion', '$id_alimentacion', '$id_habitat')";

    // INSERT INTO animal (nombre_animal, descripcion_animal, id_clasificacion_id, id_alimentacion_id, id_habitat_id)
    // VALUES (nombre_animal, descripcion_animal, id_clasificacion, id_alimentacion, id_habitat);


    $query = mysqli_query($conn, $consulta);

    header('Location: ../animal.php');

?>
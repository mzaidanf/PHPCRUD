<?php

include './conn.php';

$id = $_GET['id'];

$result = $conn ->query('update siswa set kehadiran = "' . NULL . '" where id = '. $id); 

if(!$result){
    var_dump($conn->query);
    exit();
}
header("Location:/phpcrud/index.php");
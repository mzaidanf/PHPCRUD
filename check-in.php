<?php

include './conn.php';

$id = $_GET['id'];
$today = date('Y-m-d');

$result = $conn ->query('update siswa set kehadiran = "' . $today . '" where id = '. $id); 

if(!$result){
    var_dump($conn->query);
    exit();
}
header("Location:/phpcrud/index.php");
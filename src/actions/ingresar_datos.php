<?php

include '../config/db_conexion.php';


$sql = "SELECT * FROM vocabulario";
$res = mysqli_query($conn, $sql);

$id = mysqli_num_rows($res);
$id += 1;

EXTRACT ($_POST);

$mysql = "INSERT INTO vocabulario VALUES ( $id, '$palabra', '$significado')";
$rest1 = mysqli_query($conn, $mysql); 

?>
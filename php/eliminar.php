<?php
include_once("../controlador/conexion.php");

$cod = $_GET['cod'];

mysqli_query($conn, "DELETE from usuarios where cod = $cod");

header("location:../");

?>
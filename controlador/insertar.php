<?php
include_once("../controlador/conexion.php");
if (isset($_POST['modify'])) {
    if (
        !empty($_POST['nombre']) &&
        !empty($_POST['apellido']) &&
        !empty($_POST['email']) &&
        !empty($_POST['tel'])
    ) {
        $name = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['email'];
        $tel = $_POST['tel'];
        $code = $_POST['cod'];

        $modifcar = "UPDATE usuarios set nom='$name', apellido = '$apellido', correo = '$correo', tel = '$tel' where cod = '$code'";

        mysqli_query($conn, $modifcar);
        header("Location:../");
    } else {
        echo '
        <div class="alert alert-danger alert-dismissible fade show d-flex " id="alertExample" role="alert" data-mdb-color="danger" style="margin-top: -85px;>
            <i class="fas fa-check me-2"></i>
            Los campos no pueden quedar vac&iacute;os.
            <button type="button" class="btn-close ms-2" data-mdb-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
}

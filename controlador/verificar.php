<?php
// include("conexion.php");


if (!empty($_POST['agg'])) {
    if (
        !empty($_POST['nombre']) &&
        !empty($_POST['apellido']) &&
        !empty($_POST['correo']) &&
        !empty($_POST['tel'])
    ) {
        $name = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $tel = $_POST['tel'];
        mysqli_query($conn, "INSERT into usuarios(nom ,apellido, correo, tel) values('$name','$apellido','$correo','$tel')");
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

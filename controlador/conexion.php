<?php
$conn = new mysqli('localhost', 'root', '', 'crud');

if (mysqli_connect_errno()) {
    echo "
    <div class='alert alert-secondary'>
        No se ha podido conectar ".mysqli_connect_errno()."
    </div>";
}

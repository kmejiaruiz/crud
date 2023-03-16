<!doctype html>
<html lang="es">

<?php
include("./controlador/conexion.php");

$usuarios = "SELECT * from usuarios order by cod asc";

require_once("./vistas/templates/head.html");
require_once("./vistas/templates/navbar.html");

?>




<body>
  <div style="min-height: 50vh; height: 100%; display: grid; place-items: center;" class="table-responsive">
    <div class="d-flex justify-content-center align-items-center">
      <div class="">
        <table class="table align-middle mb-0 table-hover">
          <thead class="bg-light">
            <tr>
              <th>Numero</th>
              <th>Codigo</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Correo</th>
              <th>Telefono</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $resultado = mysqli_query($conn, $usuarios);
            $filas = 0;

            while ($row = mysqli_fetch_assoc($resultado)) {
              $filas++;
            ?>
              <tr>
                <td><?php echo $filas; ?></td>
                <td><?php echo $row['cod']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['tel']; ?></td>
                <td>
                  <?php echo "<a href='./php/editar.php?cod=$row[cod]' class='btn btn-success'>
                    <i class='far fa-edit'></i>
                  </a>
                  <a href='#exampleModal' class='btn btn-danger' onclick='seleccion($row[cod])' data-mdb-toggle='modal' data-mdb-target='#exampleModal'><i class='far fa-trash-alt'></i></a>
                </td>"; ?>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal -->

  <div class="modal right fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="false" style="background-color: #000;">
    <div class="modal-dialog modal-side modal-top-right modal-dialog-centered">
      <div class="modal-content text-white" style="background-color: #2c2b2b;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Selecciona una opcion</h5>
          <button type="button" class="btn-close btn-close-white" data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-grid" style="place-items: center;">
            <div class="alert alert-danger text-center" role="alert">
              <div class="d-flex flex-direction-column justify-content-center gap-2"> <br>
                <i class="fas fa-exclamation-circle"></i>
              </div>
              Est&aacute;s seguro de querer eliminar este registro? <br>
              Esta acci&oacute;n no se puede deshacer.
            </div>
          </div>
        </div>
        <div class="p-3 text-end">
          <button type="button" class="btn btn-primary" data-mdb-dismiss="modal">
            Cancelar
          </button>
          <a type="button" class="btn btn-danger" id="eliminar">Eliminar</a>
        </div>
      </div>
    </div>
  </div>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
  <!-- script propio -->
  <script src="./vistas/scripts/eliminar.js"></script>
</body>

</html>
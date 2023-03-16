<!DOCTYPE html>
<html lang="en">

<?php require_once("../vistas/templates/head.html");
// require_once("../vistas/templates/navbar.html")
?>

<body>
    <div class="body">
        <div class="padre col-12">
            <div style="display: flex; justify-content:center; align-items: center;">
                <?php
                include("../controlador/conexion.php");
                include("../controlador/verificar.php");
                ?>
            </div>


            <div class="container-fluid d-flex justify-content-center align-items-center">
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <form method="POST" id="agregar">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="nombre" class="form-control" name="nombre" />
                                            <label class="form-label" for="nombre">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="apellido" class="form-control" name="apellido" />
                                            <label class="form-label" for="apellido">Apellido</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="correo" class="form-control" name="correo" />
                                    <label class="form-label" for="correo">Correo Electronico</label>
                                </div>

                                <!-- number input -->
                                <div class="form-outline mb-4">
                                    <input type="number" id="tel" class="form-control" name="tel" />
                                    <label class="form-label" for="tel" min="0">Ingresa tu numero de tel&eacute;fono</label>
                                </div>

                                <!-- Submit button -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                                    Agregar
                                </button>
                            </form>
                        </div>
                    </div>
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
                            <div class="alert alert-danger" role="alert">
                                <div class="d-flex flex-direction-column justify-content-center gap-2"> <br>
                                    <i class="fas fa-exclamation-circle"></i>
                                </div>
                                Est&aacute;s seguro de querer agregar este registro?
                            </div>
                        </div>
                    </div>
                    <div class="p-3 text-end">
                        <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                            Cancelar
                        </button>
                        <input type="submit" form="agregar" class="btn btn-success" name="agg" value="Agregar">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/eliminar.js"></script>
</body>

</html>
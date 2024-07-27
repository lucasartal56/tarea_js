<?php include_once '../../includes/header.php' ?>
<div class="container mt-5">
    <h1 class="text-center">Formulario de Programadores</h1>
    <div class="row justify-content-center mb-3">
        <form class="col-lg-8 border bg-light p-3">
            <input type="hidden" name="pro_id" id="pro_id">
            <div class="row mb-3">
                <div class="col">
                    <label for="pro_grado">Grado</label>
                    <input type="text" name="pro_grado" id="pro_grado" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="pro_arma">Arma</label>
                    <input type="text" name="pro_arma" id="pro_arma" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="pro_nombre">Nombres</label>
                    <input type="text" name="pro_nombre" id="pro_nombre" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="pro_apellido">Apellidos</label>
                    <input type="text" name="pro_apellido" id="pro_apellido" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="pro_catalogo">Número de Catálogo</label>
                    <input type="number" name="pro_catalogo" id="pro_catalogo" class="form-control" required>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col">
                    <button type="submit" id="btnGuardar" class="btn btn-primary w-100">Guardar</button>
                </div>
                <div class="col">
                    <button type="button" id="btnBuscar" class="btn btn-info w-100">Buscar</button>
                </div>
                <div class="col">
                    <button type="button" id="btnModificar" class="btn btn-warning w-100">Modificar</button>
                </div>
                <div class="col">
                    <button type="button" id="btnCancelar" class="btn btn-secondary w-100">Cancelar</button>
                </div>
                <div class="col">
                    <button type="reset" id="btnLimpiar" class="btn btn-secondary w-100">Limpiar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 table-responsive">
            <h2 class="text-center">Lista de Programadores</h2>
            <table class="table table-bordered table-hover" id="tablaProgramadores">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Grado</th>
                        <th>Arma</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Catalogo</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5">No hay programadores disponibles</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script defer src="/tarea_js/src/js/funciones.js"></script>
<script defer src="/tarea_js/src/js/programadores/index.js"></script>
<?php include_once '../../includes/footer.php' ?>

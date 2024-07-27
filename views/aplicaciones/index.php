<?php include_once '../../includes/header.php' ?>
<div class="container mt-5">
    <h1 class="text-center">Formulario de Aplicaciones</h1>
    <div class="row justify-content-center mb-3">
        <form class="col-lg-8 border bg-light p-3">
            <input type="hidden" name="ap_id" id="ap_id">
            <div class="row mb-3">
                <div class="col">
                    <label for="ap_nombre">Nombre de la Aplicación</label>
                    <input type="text" name="ap_nombre" id="ap_nombre" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="ap_descripcion">Descripción</label>
                    <input type="text" name="ap_descripcion" id="ap_descripcion" class="form-control" required>
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
            <h2 class="text-center">Lista de Aplicaciones</h2>
            <table class="table table-bordered table-hover" id="tablaAplicaciones">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nombre de la App</th>
                        <th>Descripción</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5">No hay aplicaciones disponibles</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script defer src="/tarea_js/src/js/funciones.js"></script>
<script defer src="/tarea_js/src/js/aplicaciones/index.js"></script>
<?php include_once '../../includes/footer.php' ?>

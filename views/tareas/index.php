<?php include_once '../../includes/header.php' ?>

<?php require_once '../../models/Aplicacion.php';?>

<?php
$verAplicaciones = new Aplicacion();
$aplicaciones = $verAplicaciones->mostrarAplicaciones();
?>


<div class="container mt-5">
    <h1 class="text-center">Formulario de Tareas</h1>
    <div class="row justify-content-center mb-3">
        <form class="col-lg-8 border bg-light p-3">
            <input type="hidden" name="ta_id" id="ta_id">
            
            <div class="row mb-3">
                <div class="col">
                    <label for="ta_nombre">Nombre de la Tarea</label>
                    <input type="text" name="ta_nombre" id="ta_nombre" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="ta_fecha">Fecha de Realización</label>
                    <input type="date" name="ta_fecha" id="ta_fecha" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="ta_aplicacion">Seleccione Aplicacion para realizar asignación de Tarea</label>
                    <select name="ta_aplicacion" id="ta_aplicacion" class="form-control" required>
                        <option value="">Seleccione...</option>
                        <?php foreach ($aplicaciones as $aplicacion) : ?>
                            <option value="<?= $aplicacion['ap_id'] ?>">
                                <?= $aplicacion['ap_nombre'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
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
            <h2 class="text-center">Lista de Tareas</h2>
            <table class="table table-bordered table-hover" id="tablaTareas">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nombre de la Tarea</th>
                        <th>Fecha de Realización</th>
                        <th>Aplicacion</th>
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
<script defer src="/tarea_js/src/js/tareas/index.js"></script>  
<?php include_once '../../includes/footer.php' ?>
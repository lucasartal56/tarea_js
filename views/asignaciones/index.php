<?php include_once '../../includes/header.php' ?>

<?php require_once '../../models/Aplicacion.php';?>
<?php require_once '../../models/Programador.php';?>

<?php
$verAplicaciones = new Aplicacion();
$aplicaciones = $verAplicaciones->mostrarAplicaciones();
?>

<?php
$verProgramadores = new Programador();
$programadores = $verProgramadores->mostrarProgramadores();
?>


<div class="container mt-5">
    <h1 class="text-center">Formulario de Asignación de Apps a Programadores</h1>
    <div class="row justify-content-center mb-3">
        <form class="col-lg-8 border bg-light p-3">
            <input type="hidden" name="as_id" id="as_id">
            <div class="row mb-3">
                <div class="col">
                    <label for="as_programador">Seleccione el Programador</label>
                    <select name="as_programador" id="as_programador" class="form-control" required>
                        <option value="">Seleccione...</option>
                        <?php foreach ($programadores as $programador) : ?>
                            <option value="<?= $programador['pro_id'] ?>">
                                <?= $programador['pro_nombre'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="as_aplicacion">Seleccione la Aplicacion</label>
                    <select name="as_aplicacion" id="as_aplicacion" class="form-control" required>
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
            <h2 class="text-center">Lista de Asignaciones</h2>
            <table class="table table-bordered table-hover" id="tablaAsignaciones">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nombre del Programador</th>
                        <th>Nombre de la Aplicacion</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5">No hay asignaciones disponibles</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script defer src="/tarea_js/src/js/funciones.js"></script>
<script defer src="/tarea_js/src/js/asignaciones/index.js"></script>
<?php include_once '../../includes/footer.php' ?>

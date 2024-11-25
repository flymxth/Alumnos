<?php include('../TEMPLATES/cabecera.php'); ?>
<?php include('../SECCIONES/cursos.php'); ?>

<div class="col-md-5">
    <form action="" method="post">
        <div class="card">
            <div class="card-header">
                Cursos
            </div>
            <div class="card-body">
            <div class="mb-3">
                <label for="" class="form-label">ID</label>
                <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID" value="<?php echo $nombre_curso; ?>">
            </div>
            <div class="mb-3">
                <label for="nombre_curso" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre_curso" id="nombre_curso" aria-describedby="helpId" placeholder="Nombre del curso">
            </div>
            <div class="btn-group" role="group" aria-label="">
                <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
                <button type="submit" name="accion" value="borrar" class="btn btn-danger">Borrar</button>
            </div>
        </div>
     </div>
  </form>
</div>
<div class="col-md-7">
    <table class="table">
        <thead>
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </tbody>
            <?php foreach($listaCursos as $curso){  ?>
        <tr>
            <td> <?php echo $curso['id']; ?></td>
            <td> <?php echo $curso['nombre_curso']; ?></td>
            <td>
                <form action="" method="post">
                    <input type="text" name="id" id="id" value="<?php echo $curso['id']; ?>">
                    <input type="submit" name="accion" value="Seleccionar" class="btn btn-info">
                </form>
            </td>
        </tr>
        <?php } ?>
        </thead>
    </table>
</div>
<?php include('../TEMPLATES/pie.php'); ?>
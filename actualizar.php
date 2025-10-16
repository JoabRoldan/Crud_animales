<?php 
    include "./clases/Conexion.php";
    include "./clases/Crud.php";

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
    $idMongo = $datos->_id;
?>

<?php include "./header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">

                    <a href="index.php" class="btn btn-outline-info">
                        <i class="fa-solid fa-angles-left"></i> Regresar
                    </a>
                    <h2>Actualizar datos de la mascota</h2>

                    <form action="./procesos/actualizar.php" method="POST">
                        <input type="text" hidden value="<?php echo $idMongo ?>" name="id">

                        <label for="nombre_mascota">Nombre de la Mascota</label>
                        <input type="text" class="form-control" id="nombre_mascota" name="nombre_mascota" 
                            value="<?php echo $datos->nombre_mascota ?>" required>

                        <label for="edad">Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad" 
                            value="<?php echo $datos->edad ?>" required>

                        <label for="especie">Especie</label>
                        <input type="text" class="form-control" id="especie" name="especie" 
                            value="<?php echo $datos->especie ?>" required>

                        <label for="raza">Raza</label>
                        <input type="text" class="form-control" id="raza" name="raza" 
                            value="<?php echo $datos->raza ?>">

                        <label for="nombre_dueño">Nombre del Dueño</label>
                        <input type="text" class="form-control" id="nombre_dueño" name="nombre_dueño" 
                            value="<?php echo $datos->nombre_dueño ?>" required>

                        <button class="btn btn-warning mt-3">
                            <i class="fa-solid fa-floppy-disk"></i> Actualizar
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>

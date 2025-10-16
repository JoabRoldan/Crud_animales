<?php
    include "./clases/Conexion.php";
    include "./clases/Crud.php";
    include "./header.php"; 

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4 fondoDelete">
                <div class="card-body">

                    <a href="index.php" class="btn btn-outline-info">
                        <i class="fa-solid fa-angles-left"></i> Regresar
                    </a>
                    <h2>Eliminar registro de animal</h2>
                    
                    <table class="table table-bordered">
                        <thead>
                            <th>Nombre mascota</th>
                            <th>Edad</th>
                            <th>Especie</th>
                            <th>Raza</th>
                            <th>Nombre del dueño</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $datos->nombre_mascota; ?></td>
                                <td><?php echo $datos->edad; ?></td>
                                <td><?php echo $datos->especie; ?></td>
                                <td><?php echo $datos->raza; ?></td>
                                <td><?php echo $datos->nombre_dueño; ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>

                    <div class="alert alert-danger" role="alert">
                        <p>¿Está seguro de eliminar este registro?</p>
                        <p>⚠️ Una vez eliminado no podrá ser recuperado.</p>
                    </div>

                    <form action="./procesos/eliminar.php" method="POST">
                        <input type="text" name="id" value="<?php echo $datos->_id; ?>" hidden>
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i> Eliminar
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>

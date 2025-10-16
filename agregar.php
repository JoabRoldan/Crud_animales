<?php include "./header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h2>Agregar nuevo animal</h2>
                    <form action="./procesos/insertar.php" method="POST">
                        <label>Nombre Mascota:</label>
                        <input type="text" name="nombre_mascota" class="form-control" required>

                        <label>Edad:</label>
                        <input type="number" name="edad" class="form-control" required>

                        <label>Especie:</label>
                        <input type="text" name="especie" class="form-control" required>

                        <label>Raza:</label>
                        <input type="text" name="raza" class="form-control" required>

                        <label>Nombre del Dueño:</label>
                        <input type="text" name="nombre_dueño" class="form-control" required>

                        <button class="btn btn-success mt-3">
                            <i class="fa-solid fa-floppy-disk"></i> Guardar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>

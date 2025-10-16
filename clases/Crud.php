<?php 
    class Crud {
        public function mostrarDatos() {
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->animales;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function obtenerDocumento($id) {
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->animales;
                $datos = $coleccion->findOne([
                    '_id' => new MongoDB\BSON\ObjectId($id)
                ]);
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function insertarDatos($datos) {
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->animales;
                $respuesta = $coleccion->insertOne($datos);
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function eliminar($id) {
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->animales;
                $respuesta = $coleccion->deleteOne([
                    "_id" => new MongoDB\BSON\ObjectId($id)
                ]);
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function actualizar($id, $datos) {
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->animales;
                $respuesta = $coleccion->updateOne(
                    ['_id' => new MongoDB\BSON\ObjectId($id)],
                    ['$set' => $datos]
                );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function mensajesCrud($mensaje) {
            $msg = '';

            if ($mensaje == 'insert') {
                $msg = 'swal("Excelente!", "Agregado con éxito!", "success")';
            } else if ($mensaje == 'update') {
                $msg = 'swal("Excelente!", "Actualizado con éxito!", "info")';
            } else if ($mensaje == 'delete') {
                $msg = 'swal("Excelente!", "Eliminado con éxito!", "warning")';
            }

            return $msg;
        }
    }
?>

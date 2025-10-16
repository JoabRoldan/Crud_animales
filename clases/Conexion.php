<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/b221190039/crud_mascotas/vendor/autoload.php";
    require_once __DIR__ . '/../vendor/autoload.php';

    class Conexion {
        public static function conectar() {
           try {
                $servidor = "localhost";
                $puerto = "27017";
                $usuario = "backend";
                $password = "backend2025";
                $BD = "221190039_crud";
                $cadenaConexion = "mongodb://$usuario:$password@$servidor:$puerto/$BD?authSource=admin";
                $cliente = new MongoDB\Client($cadenaConexion);
                return $cliente->selectDatabase($BD);
           } catch (\Throwable $th) {
               return $th->getMessage();
           }
        }
    }

?>


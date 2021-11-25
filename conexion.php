<?php
    class BD{

        //atributo estatico donde guardaremos la conexion
        private static $conexion=NULL;

        public static function crearConexion(){

            //Verificamos que la conexion no este creada
            if(!isset( self::$conexion)){

                //Si no esta creada pasamos a crearla
                self::$conexion = mysqli_connect("localhost","root", "", "productos");

                // Chequea la coneccion
                if (!self::$conexion) {
                    die("La conexion fallo: " . mysqli_connect_error());
                }
            }

            return self::$conexion;
        }
    }
?>
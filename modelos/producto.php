<?php
    class Producto{

        public $id;
        public $nombre;
        public $cantidad;
        public $precio;

        public function __construct($id, $nombre, $cantidad, $precio)
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->cantidad = $cantidad;
            $this->precio = $precio;
        }

        public static function consultar(){
            $listaProductos = [];
            $conexion = BD::crearConexion();
            $consulta = "SELECT * FROM productos";
            if ($resultado = mysqli_query($conexion, $consulta)) {
                //Obtener la lista de usuarios 
                while ($producto= $resultado->fetch_object()) {

                    $listaProductos[] = new Producto($producto->id, $producto->nombre, $producto->cantidad, $producto->precio);
                }
            }

            return $listaProductos;
        }

        public static function borrar($id){
            $conexion = BD::crearConexion();
            $query = "DELETE FROM productos WHERE id = '$id'";
            $exito = mysqli_query($conexion, $query);

            if(!$exito){
                echo "Hubo un error al eliminar el producto: ".mysqli_error($conexion);
            }
        }

        public static function editar($id, $nombre, $cantidad, $precio){
            $conexion = BD::crearConexion();
            $query = "UPDATE productos SET 
                                Nombre ='$nombre', 
                                Cantidad='$cantidad', 
                                Precio='$precio'  
                                WHERE id = '$id'";
            $exito = mysqli_query($conexion, $query);

            if(!$exito){
                echo "Hubo un error al actualizar el producto: ".mysqli_error($conexion);
            }
        }

        public static function buscar($id){
            //Obtenemos una conexion a la base de datos
            $conexion = BD::crearConexion();
            //Armamos la consulta que sera ejecutada en la base de datos
            $query = "SELECT * FROM productos WHERE id = '$id' ";
            //Ejecutamos la consulta
            $resultado = mysqli_query($conexion, $query);

            //Vericamos que se halla ejecutado correctamente la consulta
            if($resultado){
                //Verificamos que halla encontrado un resultado
                if (mysqli_num_rows($resultado) > 0){
                    //Obtenemos el resultado como un objeto
                    $producto = $resultado->fetch_object();

                    //Devolvemos un objeto del tipo Producto
                    return new Producto($producto->id, $producto->Nombre, $producto->Cantidad, $producto->Precio);
                }
                else{
                    echo "El producto con ese ID no se encuentro";
                }
                
            }
            else{
                echo "Hubo un error al buscar el producto: ".mysqli_error($conexion);
            }
        }

        public static function registrar($nombre, $precio, $cantidad){
            
            $conexion = BD::crearConexion();

            // Codigo SQL para insertar datos en la tabla personas 
            $query = "INSERT INTO productos (Nombre, Precio, Cantidad) values ('$nombre','$precio','$cantidad')";
            $exito = mysqli_query($conexion, $query);
            
            if($exito){
                echo "Se guardaron correctamente los datos";
            }
            else{
                echo "Hubo un error al guardar los datos".mysqli_error($conexion);
            }
        }
    }
?>
<?php
    require_once "models/model.php";    

class productoModel extends Model{

    function getProductos() {
        $sentencia = $this->db_coneccion->prepare("SELECT producto.*, categoria.nombre as nombre_categoria from producto join categoria on producto.id_categoria=categoria.id_categoria ORDER BY categoria.nombre"); // preparamos la seleccion de la tabla producto
        $sentencia->execute();                                               // ejecutamos lo anterior
    //    var_dump($sentencia->errorinfo());
        return $sentencia->fetchAll(PDO::FETCH_OBJ);                         // retornamos un arreglo associativo de la tabla producto
    }
    function getProducto($id) {
        $sentencia = $this->db_coneccion->prepare("SELECT * from producto WHERE id_producto = ?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function getProductosCateg($id) {
        $sentencia = $this->db_coneccion->prepare("SELECT producto.*, categoria.nombre as nombre_categoria from producto join categoria on producto.id_categoria=categoria.id_categoria WHERE producto.id_categoria=? ORDER BY producto.nombre");
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function insertarProducto($nombre, $precio, $descripcion, $img = null, $id_categoria) {
        $pathImg = 'img/dulcinea/5c6c7b2820240.jpg'; //esto es para que quede predeterminado una imagen si no se selecciona ninguna foto para subir y guardar a BD
        if ($img)
            $pathImg = $this->uploadImage($img);
            // var_dump($pathImg);
        $sentencia = $this->db_coneccion->prepare("INSERT INTO producto(nombre,precio,descripcion,imagen,id_categoria) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($nombre,$precio,$descripcion,$pathImg,$id_categoria));
        // var_dump($sentencia->errorinfo()).die();
    }
    private function uploadImage($image){
        $target = 'img/dulcinea/' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;
    }
    function editarProducto($nombre,$precio,$descripcion,$id_categoria,$id_producto, $img = null) {
        $pathImg = null;
        if ($img) {
            $pathImg = $this->uploadImage($img);
        }
        if ($pathImg!=null) { //este if esta para prevenir que no se modifique la foto en BD si no se sellecciona ninguna imagen nueva! en el form
            $sentencia = $this->db_coneccion->prepare("UPDATE producto SET nombre=?, precio=?, descripcion=?, imagen=?, id_categoria=? WHERE id_producto=?");
            $sentencia->execute(array($nombre,$precio,$descripcion,$pathImg,$id_categoria,$id_producto));
        } else {
            $sentencia = $this->db_coneccion->prepare("UPDATE producto SET nombre=?, precio=?, descripcion=?, id_categoria=? WHERE id_producto=?");
            $sentencia->execute(array($nombre,$precio,$descripcion,$id_categoria,$id_producto));
        }
        // var_dump($sentencia->errorinfo()).die();
    }
    function eliminarProducto($id_producto) {
        $sentencia = $this->db_coneccion->prepare("DELETE from producto where id_producto = ?");
        $sentencia->execute(array($id_producto));
    }
}
?>
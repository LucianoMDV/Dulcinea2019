<?php
require_once "models/productoModel.php"; //lo incorporamos para poder hacer el option en verProductos.tpl
require_once "views/productoView.php";
require_once "controllers/controller.php";

class productoController extends Controller {

    private $modelCateg;
    
    public function __construct() {
        parent::__construct();
        $this->model = new productoModel();
        $this->view = new productoView();
        $this->modelCateg = new categoriaModel();

    }

    function mostrarProductos() {
        $productos = $this->model->getProductos();
        $categorias = $this->modelCateg->getCategorias();

        if (isset($_SESSION["usuario"])) {
            $this->view->mostrarProductosAdm($productos, $categorias);         
        }
        else {
            $this->view->mostrarProductos($productos, $categorias); 
        }
    }

    function mostrarProducto($params = []) {
        $id = $params[':ID'];
        $producto = $this->model->getProducto($id);
        if (!empty($producto)) {
            $this->view->mostrarProducto($producto);
        }
        else {
            $this->view->mostrarError();
        }
    }

    function insertarProducto() {
        $productos = $this->model->getProductos();
        $categorias = $this->modelCateg->getCategorias();
            if (isset($_POST['lista_tabla_nombre']) && isset($_POST['lista_tabla_precio']) && isset($_POST['lista_tabla_precio']) && isset($_POST['lista_tabla_descripcion']) && isset($_POST['buscar'])) {
                $nombre = $_POST['lista_tabla_nombre'];
                $precio = $_POST['lista_tabla_precio'];
                $descripcion = $_POST['lista_tabla_descripcion'];
                $id_categoria = $_POST['buscar'];
                // var_dump($_FILES['adjunto']['size']);
                // var_dump($_FILES['adjunto']['type']); 
                $tamaño_imagen = $_FILES['adjunto']['size']/1024; //aca lo divido en 1024 para quedarme con KB.
                // var_dump($tamaño_imagen);die();
                if ($tamaño_imagen>=3072) {  //este numero 3145728 son la representacion de bytes, es decir 3MB.
                    $error = (int) $tamaño_imagen ." KB el tamaño del archivo es muy grande, tiene que ser menor a 3 MB";
                    $this->view->mostrarProductosAdm($productos, $categorias, $error); 
                } else {
                    $this->model->insertarProducto($nombre,$precio,$descripcion, $_FILES['adjunto']['tmp_name'], $id_categoria);
                    header("Location: " . PRODUCTO);
                }
            }
        }

    function eliminarProducto($params = []) {
        $id_producto = $params[':ID'];
        if (isset($_SESSION["usuario"])) {                  //esto es para ver si no esta logeado, que no pueda eliminar un producto
            $this->model->eliminarProducto($id_producto);
            header("Location: " . PRODUCTO);
        } else {
            header("Location: " . HOME);
        }
    }

    function crearEdit($params = []) {
        $id_producto = $params[':ID'];
        if (isset($_SESSION["usuario"])) {                  //esto es para ver si no esta logeado, que no pueda editar un producto
            $categorias = $this->modelCateg->getCategorias();
            $producto = $this->model->getProducto($id_producto);
            $this->view->crearEdit($id_producto, $categorias, $producto);
        } else {
            header("Location: " . HOME);
        }
    }

    function editarProducto($params = []) {
        $id_producto = $params[':ID'];
        $nombre = $_POST['lista_tabla_nombre'];
        $precio = $_POST['lista_tabla_precio'];
        $descripcion = $_POST['lista_tabla_descripcion'];
        $id_categoria = $_POST['buscar'];
        $categorias = $this->modelCateg->getCategorias();
        $producto = $this->model->getProducto($id_producto);
        // var_dump($_FILES['adjunto']['size']);
        // var_dump($_FILES['adjunto']['type']); 
        $tamaño_imagen = $_FILES['adjunto']['size']/1024; //aca lo divido en 1024 para quedarme con KB.
        // var_dump($tamaño_imagen);die();
        if ($tamaño_imagen>=3072) {  //este numero 3145728 son la representacion de bytes, es decir 3MB.
            $error = (int) $tamaño_imagen ." KB el tamaño del archivo es muy grande, tiene que ser menor a 3 MB";
            // var_dump($error);die();
            $this->view->crearEdit($id_producto, $categorias, $producto, $error); 
        } else {
            $this->model->editarProducto($nombre,$precio,$descripcion,$id_categoria,$id_producto,$_FILES['adjunto']['tmp_name']);
            header("Location: " . PRODUCTO);
        }
    }
}
?>
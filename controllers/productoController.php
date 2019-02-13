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
            if (isset($_POST['lista_tabla_nombre']) && isset($_POST['lista_tabla_precio']) && isset($_POST['lista_tabla_precio']) && isset($_POST['lista_tabla_descripcion']) && isset($_POST['buscar'])) {
                $nombre = $_POST['lista_tabla_nombre'];
                $precio = $_POST['lista_tabla_precio'];
                $descripcion = $_POST['lista_tabla_descripcion'];
                $id_categoria = $_POST['buscar'];
                $this->model->insertarProducto($nombre,$precio,$descripcion,$id_categoria);
                header("Location: " . PRODUCTO);
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
        $this->model->editarProducto($nombre,$precio,$descripcion,$id_categoria,$id_producto);
        header("Location: " . PRODUCTO);
    }
}
?>
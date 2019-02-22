<?php
require_once "views/view.php";
require_once "models/productoModel.php";

class productoView extends View {

    function mostrarProductos($productos, $categorias) {
        $this->smarty->assign("productos",$productos);
        $this->smarty->assign("categorias",$categorias);
        $this->smarty->display("templates/productos/verProductos.tpl");
    }

    function mostrarProductosAdm($productos, $categorias, $error = '') {
        $this->smarty->assign("productos",$productos);
        $this->smarty->assign("categorias",$categorias);
        $this->smarty->assign("error", $error);
        $this->smarty->display("templates/productos/verProductosAdm.tpl");
    }

    function mostrarProducto($producto) {
        $this->smarty->assign("producto",$producto);
        $this->smarty->display("templates/productos/verProducto.tpl");
    }

    function mostrarError() {
        $this->smarty->display("templates/productos/verError.tpl");
    }

    // function mostrarErrorImagen($tamaño_imagen) {
    //     $this->smarty->assign('tamanio',$tamaño_imagen);
    //     $this->smarty->display("templates/productos/verErrorImagen.tpl");
    // }
    function crearEdit($id_producto, $categorias, $producto, $error = '') {
        $this->smarty->assign("id_producto", $id_producto);
        $this->smarty->assign("producto", $producto);
        $this->smarty->assign("categorias", $categorias);
        $this->smarty->assign("error", $error);
        $this->smarty->display("templates/productos/crearEdit.tpl");
    }
}
?>
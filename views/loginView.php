<?php
require_once "views/view.php";

class loginView extends View {

    function mostrarLogin($error = "") {
        $this->smarty->assign("error", $error);
        $this->smarty->display("templates/login.tpl");
    }
}
?>
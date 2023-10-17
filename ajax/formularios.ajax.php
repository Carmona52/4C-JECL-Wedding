<?php 
require_once "../controladores/formularios.controlador.php";
require_once "../modelos/formularios.modelos.php";

class ajaxFormularios{

    public $validarEmail;
    public function ajaxValidarEmail(){
        $item ="email";
        $valor = $this->validarEmail;
        $respuesta = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
        echo '<pre>'; print_r($respuesta); echo '</pre>';
    }
}

if (isset($_POST["validarEmail"])) {
    $validarEmail = new ajaxFormularios();
    $validarEmail -> validarEmail = $_POST["validarEmail"];
    $validarEmail = new ajaxFormularios();
}
?>
<?php
//Llamada al modelo
require_once("models/division.php");

class division_controller{
    private $modelo;
    
    function __construct(){
        $this->modelo= new division_model();
    }
    function index(){
        require_once("views/header.php");
        require_once("views/index.php");
        require_once("views/footer.php");

    }
    //Realizar Operacion
    function get_datos(){
        $data['dividendo']=$_REQUEST['in_dividendo'];
        $data['divisor']=$_REQUEST['in_divisor'];

        $resultados[] = $this->modelo->dividir($data);

        require_once("views/header.php");
        require_once("views/division_view.php");
        require_once("views/footer.php");
    }

}

?>

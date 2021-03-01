<?php
class division_model{
    private $data;
 
    public function __construct(){
        $this->data=array();
    }

    public function dividir($datos){
        $resultado = $datos['dividendo']/$datos['divisor'];
        $residuo = $datos['dividendo']%$datos['divisor'];

        $this->data['dividendo']=$datos['dividendo'];
        $this->data['divisor']=$datos['divisor'];
        $this->data['resultado']=intval($resultado);
        $this->data['residuo']=intval($residuo);
        
        return $this->data;
    }
}
?>

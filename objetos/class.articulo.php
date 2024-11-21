<?php
class Articulo{
protected $pNombre = "";
protected $pPrecio = 0;

public function __construct($pNombre, $pPrecio){

    $this->pNombre = $pNombre;
    $this->pPrecio = $pPrecio;

    
}

 public function __toString(){
    return 'Nombre:' . $this->nombre . ' Precio: '.$this->precio . '€ euros';

 }

 public function getPrecio(){
    return $pPrecio;
 }

 public function setPrecio($pPrecio){
    if (is_int(getPrecio())){
    return $pPrecio;
 }




}

}







?>
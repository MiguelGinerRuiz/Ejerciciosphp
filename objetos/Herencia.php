<?php

if (!class_exists('class.articulo.php')){
 require_once('class.articulo.php');
}



 final class ArticuloRebajado extends Articulo{
    private $rebaja = 0;

    public function __construct($pNombre, $pPrecio,$rebaja){

        parent::__construct($pNombre,$pPrecio);
        $this->rebaja = $rebaja;
    
        
    }
    public function setNum(int $rebaja) {
        $this->rebaja = $rebaja;
    }
    public function getNum(){
    return $this->rebaja;
    }
    private function calculaDescuento(){
        return $this->pPrecio*$this->rebaja/100;
    }
    public function precioRebajado(){
        return $this->pPrecio/$this->rebaja;
    }

    public function __toString(){
        parent::__toString();
        echo " La rebaja es del ".$this->rebaja."% y el descuento es  ".$this->calculaDescuento()." €";
    }



}
$ArticuloRebajado = new ArticuloRebajado("Bicicleta",320,20);
$ArticuloRebajado->__toString();


?>
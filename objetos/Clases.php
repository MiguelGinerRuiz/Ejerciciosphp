<?php
class Persona{
    private $DNI ="";
    private $nombre ="";
    private $email ="";
public function __construct($DNI, $nombre, $email)
{
    $this->DNI = $DNI;
    $this->nombre = $nombre;
    $this->email = $email;
}
    public function setDNI(string $DNI) {
    $this->DNI = $DNI;
    }
    public function setNombre(string $nombre) {
    $this->nombre = $nombre;
    }
    public function setEmail(string $email) {
        $this->email = $email;
    }
    public function getDNI(){
    return $this->DNI;
    }
    public function getNombre(){
    return $this->nombre;
    }
    public function getEmail(){
        return $this->email;
    }
public function mostrar(){
    echo " Me llamo ".$this->nombre." Mi email es ".$this->email." Y mi DNI es ".$this->DNI.".";
}
}

class Estudiante extends Persona{
    private $numExpediente = 0 ;
    public function __construct($DNI,$nombre,$email,$numExpediente)
    {
    parent::__construct($DNI,$nombre,$email);
    $this->numExpediente = $numExpediente;
}
public function setNum(int $numExpediente) {
    $this->numExpediente = $numExpediente;
}
public function getNum(){
return $this->numExpediente;
}

public function mostrar(){
    parent::mostrar();
    echo " Y mi numero de expediente es ".$this->numExpediente.".";
}

}

$persona = new Persona("23985634Y","Angel Ruiz","juan@gmail.com");
$persona->setNombre("Miguel Angel Ruiz");
echo "<h2>Informacion de la persona:</h2>";
$persona->mostrar();

$estudiante = new Estudiante("87654321B", "Luis Rodríguez", "luis.rodriguez@example.com", 123456);
echo "<h2>Información del Estudiante:</h2>";
$estudiante->mostrar();


?>








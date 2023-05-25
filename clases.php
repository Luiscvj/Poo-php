<?php 
class Persona{


    public $nombre;
    private $edad;
    public function __construct($_nombre,$_edad){

        $this->nombre = $_nombre;
        $this->edad = $_edad;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($_nombre){
        $this->nombre = $_nombre;
    }

    public function getEdad(){
        return $this->edad;

    }

    public function setEdad($_edad){
        $this->edad = $_edad;
    }

    private function saludar(){
        echo "Hola mi nombre es ".$this->nombre;
    }



}



class Movil{


    public $marca;
    public $tipoMovil;
    private $propietario;

    public function __construct($_marca,$_tipoMovil,$_propietario){
        $this->marca = $_marca;
        $this->tipoMovil =$_tipoMovil;
        $this->propietario =$_propietario;
    }


}


?>
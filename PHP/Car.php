<?php

require_once('Account.php');

class Car {
    public $id;
    public $license;
    public $driver;
    protected $passenger;

    function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar(){
        echo "
            Licencia: $this->license
            Driver: {$this->driver->name}
            Pasajeros: $this->passenger
            ";
    } 
    
    public function getPassenger(){
        return $this->passenger;
    }

    public function setPassenger($passenger){
        if($passenger == 4){
            $this->passenger = $passenger;
        }else{
            echo "Necesitas asginar cuatro pasajeros";
        }
    }     
}



?>
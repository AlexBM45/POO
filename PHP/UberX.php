<?php

require_once('Car.php');

class UberX extends Car{
    public $brand;
    public $model;

    public function __contructor($license,$driver,$brand,$model){
        parent::__contruct($license,$driver);
        $this->brand = $brand;
        $this->model = $model;
    }

    public function printDataCar(){
        parent::PrintDataCar();
        echo" 
            Modelo: $this->model
            Marca: $this->brand 
            ";
    }
}

?>
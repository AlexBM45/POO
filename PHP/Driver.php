<?php

require('Account.php');

class Driver extends Account{
    public function __constructor($name,$document){
        parent::__contruct($name,$document);
    }
}

?>
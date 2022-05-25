<?php

require('Account.php');

class User extends Account{
    public function __constructor($name,$document){
        parent::__contruct($name,$document);
    }
}

?>
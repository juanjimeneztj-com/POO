<?php

trait Utils{
    public function showModel(){
        echo $this->model.'<br />';
    }
}

class Server{
    public $version;
}

class HP extends Server{
    public $model;
    
    Use Utils;
}

class Dell extends Server{
    public $model;
    
    Use Utils;
}

$computer1 = new HP();
$computer2 = new Dell();

$computer1->model = 'X90';
$computer1->version = '1.0.0';
$computer2->model = 'V90';
$computer2->version = '3.4.1';

$computer1->showModel();
$computer2->showModel();
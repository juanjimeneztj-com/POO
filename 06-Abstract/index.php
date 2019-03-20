<?php

abstract class Server{
    public $status;

    abstract public function On();
    
    public function Off(){
        $this->status = false;
    }
}

class HP extends Server{
    public $system;
    
    public function Starting(){
        $this->system = true;
    }
    
    public function Shutdown(){
        $this->system = false;
    }
    
    public function On(){
        $this->status = true;
    }
}

$computer = new HP();
$computer->Starting();
$computer->On();
$computer->Shutdown();
var_dump($computer);
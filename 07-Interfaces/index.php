<?php

interface Server{
    public function Starting();
    public function Shutdown();
    public function Reset();
}

class Dell implements Server{
    private $model;
    
    public function getModel(){
        return $this->model;
    }
    
    public function setModel($newModel){
        $this->model = $newModel;
    }
    
    public function Starting(){
        ;
    }
    
    public function Shutdown(){
        ;
    }
    
    public function Reset(){
        ;
    }
}

$computer1 = new Dell();
$computer1->setModel('X90 C550');
echo $computer1->getModel();
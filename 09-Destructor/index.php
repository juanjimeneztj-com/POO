<?php

class User{
    public $name;
    public $email;
    
    public function __construct(){
        /*Test*/
        echo 'Object Created<br />';
    }
    
    public function __destruct(){
        /*Test*/
        echo 'Object Deleted';
    }
}

$user_juan = new User();

for($i=0;$i<=10;$i++){
    echo $i."<br />";
}
<?php

class User{
    public $email;
    public $password;
    const URL_WEB = "https://juanjimeneztj.com";
    
    public function showInfo($email,$password){
        $this->email = $email;
        $this->password = $password;
        return "Email: $email <br />Password: $password<br />";
    }
}

$user = new User();
echo $user->showInfo('admin@juanjimeneztj.com','123456');
echo "Web Site: ".$user::URL_WEB;
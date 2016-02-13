<?php

namespace App\Filters;


use App\Models\Model;

class Auth extends Model
{
    protected $table = "users";
    protected $connection;

    public $email;
    public $rol;

    public function Login($email, $password)
    {
        $validate = $this->connection->query("SELECT * FROM $this->table WHERE email = '$email' AND password = md5('$password')");
        if($validate->rowCount() > 0){
            $validate = $validate->fetch(\PDO::FETCH_OBJ);
            $this->rol = $validate->rol;
            $_SESSION['name'] = $validate->username;
            $_SESSION['login'] = true;
            return true;
        }
        return false;
    }
    public function isLogin()
    {
        if($this->login = true){
            return true;
        }
        return false;
    }

    public function isAdmin(){
        if($this->rol == 1){
            return true;
        }
        return false;
    }
    public static function Logout(){
        unset($_SESSION['login']);
        unset($_SESSION['name']);
    }
}
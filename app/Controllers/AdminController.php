<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Users;
use App\Filters\Auth;

class AdminController implements Controller
{
    private $model;
    public function index(){
        if(self::isLogin()){
            return view('admin/home', '', 'baseAdmin');
        }
        return view('admin/login');
    }

    public function Login(){

        $auth = new Auth();
        $request = (object) $_POST;
        if($auth->Login($request->email, $request->password)){
            return redirect('admin');
        }
        newFlashMessage('test', 'Datos incorrectos');
        return redirect('admin');
    }
    public function Enterprise(){
        if(self::isLogin()){
            return view('admin/website/empresa', '' ,'baseAdmin');
        }
        return redirect('admin');
    }

    public function Contact(){
        if(self::isLogin()){
            return view('admin/website/contact', '', 'baseAdmin');
        }
        return redirect('admin');
    }
    public function newUser(){
        if(self::isLogin()){
            return view('admin/users/create', '', 'baseAdmin');
        }
        return redirect('admin');
    }
    public function isLogin(){
        if(isset($_SESSION['login'])){
            return true;
        }
        return false;
    }
    public function Users(){
        if(self::isLogin()){
            $this->model = new Users();
            $users = $this->model->all();
            return view('admin/users/home', compact('users'), 'baseAdmin');
        }
        return redirect('admin');
    }

    public function newProduct(){
        if(self::isLogin()){
            return view('admin/products/new', '', 'baseAdmin');
        }
        return redirect('admin');
    }
    public function newService(){
        if(self::isLogin()){
            return view('admin/service/new', '', 'baseAdmin');
        }
        return redirect('admin');
    }
    public function Logout(){
        Auth::Logout();
        return redirect('admin');
    }
}
<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Users;
use App\Filters\Auth;

class AdminController implements Controller
{

    public function index(){
        if($_SESSION['login']){
            return view('admin/home', '', 'baseAdmin');
        }
        return view('admin/login');
    }

    public function login(){

        $auth = new Auth();
        $request = (object) $_POST;
        if($auth->Login($request->email, $request->password)){
            return redirect('admin');
        }
        newFlashMessage('test', 'Datos incorrectos');
        return redirect('admin');
    }
    public function Logout(){
        Auth::Logout();
        return redirect('admin');
    }
}
<?php

namespace App\Controllers;
use App\Controllers\Controller;

class BaseController implements Controller
{
    
    public function Index()
    {
        $title = "Newbie Framework";
        return view('welcome', compact('title'));
    }

    public function Service()
    {
        echo "esto es la ruta de service";
    }
}
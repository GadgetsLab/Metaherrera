<?php
/**
 * Created by PhpStorm.
 * User: RDuuke
 * Date: 06/02/2016
 * Time: 02:41 PM
 */

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Users;

class AdminController implements Controller
{
    public function __construct()
    {

    }

    public function index(){
        return view('admin/login');
    }
}
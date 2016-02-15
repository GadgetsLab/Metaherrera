<?php 
namespace App\Controllers;
use App\Controllers\Controller;

Class WebController implements Controller
{
	public function Index()
	{
		$title="Home";
		return view('website/home', compact('title'));		
	}

	public function Product()
	{
		$title = "Productos";
		return view('website/product', compact('title'));
	}

	public function Service($opc,$opc1)
	{
		return view('website/service', compact("opc","opc1"));
	}
} 

 
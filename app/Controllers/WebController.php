<?php 
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Sliders;

Class WebController implements Controller
{
	public function Index()
	{	$sliders = new Sliders();
		$sliders = $sliders->where('estado = 1');
		$title = "MetaHerrera";
		return view('website/home', compact('title','sliders'));
	}

	public function About()
	{
		$title = "Nosotros";
		return view('website/about', compact("title"));
	}

	public function Product()
	{
		$title = "Productos";
		return view('website/product', compact('title'));
	}

	public function Service($opc,$opc1)
	{
		echo $opc .'-'. $opc1;
		//return view('website/service', compact("opc","opc1"));
	}

	public function Contact()
	{
		$title = "Contactenos";
		return view('website/contact', compact('title'));
	}
	public function notification($request)
	{
		$confirmed = correo($request);
		return view('website/contact',compact('confirmed'));
	}
} 

 
<?php 
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Services;
use App\Models\Sliders;
use App\Models\Platform;

Class WebController implements Controller
{
	public function Index()
	{
		$sliders = new Sliders();
		$sliders = $sliders->where('estado = 1');
		$about = new Platform();
		$about = $about->all();
		$title = "MetaHerrera";
		$services = new Services();
		$services = $services->all();
		$menu_active = 'inicio';
		return view('website/home', compact('title','sliders','about','menu_active', 'services'));
	}

	public function About()
	{
		$title = "Nosotros";
		$about = new Platform();
		$about = $about->all();
		$menu_active = 'about';

		return view('website/about', compact('title', 'about', 'menu_active'));
	}

	public function Product()
	{
		$title = "Productos";
		$menu_active = 'product';

		return view('website/product', compact('title', 'menu_active'));
	}

	/*public function newProduct($id)
    {
        if($_POST)
        {
            $request = (object) $_POST;
            $imagen = (object) $_FILES;
            if (isset($id))
            {
                $produc = new Products();
                $product->update($request->nombre, $request->descripcion); 
                return redirect('admin/product');           
            }
            else
            {
                $dir_file = '../resource/images/products/';
                $name_image = $imagen->imagen['name'];
               if(move_uploaded_file($imagen->imagen['tmp_name'],$dir_file.$name_image))
               {
                    $product = new Products();
                    $product->create($request->nombre, $name_image, $request->descripcion);
                    return redirect('admin/newproduct','','baseAdmin');
                }
             }               
        }
        elseif(isset($id))
        {
            $product = new Products();
            $product = $product->find($id);
            return view('admin/product/update', compact('product'), 'baseAdmin');
        }
        else
        {
            return view('admin/product/create', '', 'baseAdmin');
        }   
    }*/

	public function Service($opc,$opc1)
	{
		echo $opc .'-'. $opc1;
		//return view('website/service', compact("opc","opc1"));
	}

	public function Contact()
	{
		$title = "Contactenos";
		$menu_active = 'contact';

		return view('website/contact', compact('title','menu_active'));
	}
	public function notification()
	{
		$request = (object)$_POST;
		$confirmed = correo($request);
		return view('website/contact',compact('confirmed'));
	}

	public function __destruct()
	{
		
	}
} 

 
<?php 
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Categories;
use App\Models\Contact;
use App\Models\Products;
use App\Models\Services;
use App\Models\Sliders;
use App\Models\Platform;

Class WebController implements Controller
{
	protected $contact;
	public function __construct()
	{
		$this->contact = new Contact();
		$this->contact = $this->contact->all();
	}

	public function Index()
	{
		$sliders = new Sliders();
		$sliders = $sliders->where('estado = 1');
		$about = new Platform();
		$about = $about->all();
		$title = "MetaHerrera";
		$services = new Services();
		$services = $services->all();
		$products = new Products();
		$products = $products->all();
		$menu_active = 'inicio';
		$contact = $this->contact;
		return view('website/home', compact('title','sliders','about','menu_active', 'services','products','contact'));
	}

	public function About()
	{
		$title = "Nosotros";
		$about = new Platform();
		$about = $about->all();
		$menu_active = 'about';
		$contact = $this->contact;
		return view('website/about', compact('title', 'about', 'menu_active','contact'));
	}

	public function Product()
	{
		$title = "Productos";
		$products = new Products();
		$products = $products->all();
		$categories = new Categories();
		$categories = $categories->all();
		$menu_active = 'product';
		$contact = $this->contact;
		return view('website/product', compact('title', 'menu_active','contact', 'products', 'categories'));
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
		$contact = $this->contact;
		return view('website/contact', compact('title','menu_active','contact'));
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

 
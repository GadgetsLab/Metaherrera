<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Platform;
use App\Models\Sliders;
use App\Models\Users;
use App\Models\Products;
use App\Models\Categories;
use App\Filters\Auth;

class AdminController implements Controller
{
    private $model;
    public function index(){
        if(self::isLogin()){
            $about = new Platform();
            $new = $about->all();
            return view('admin/home', compact('new'), 'baseAdmin');
        }
        return view('admin/login', '', 'noBase');
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
             $this->model = new Platform();
            $about = $this->model->all();
            return view('admin/website/empresa', compact('about'),'baseAdmin');
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

    public function Product(){
        if(self::isLogin()){
            return view('admin/products/home', '', 'baseAdmin');
        }
        return redirect('admin');
    }

    public function Category()
    {
        if(self::isLogin())
        {
            $categories= new Categories();
            $categories = $categories->all();
            return view('admin/categories/home', compact('categories'), 'baseAdmin');
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

    public function newProduct($id)
    {
        if($_POST)
        {
            $request = (object) $_POST;
            $imagen = (object) $_FILES;
            $product = new Products();
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
                    $product->create($request->nombre, $name_image, $request->descripcion);
                    echo "funciono";
                    //return redirect('admin/newproduct','','baseAdmin');
                }
                echo "no funcionó";
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
            return view('admin/products/new', '', 'baseAdmin');
        }   
    }


   public function newCategory($id)
    {
       if($_POST)
       {
         $request = (object) $_POST;
         $category = new Categories(); 
         if(isset($id))
         {
            $category->update($id, $request->nombre, $request->descripcion);
            return redirect('admin/category');
         }
         else
         {
            $category->create($request->nombre, $request->descripcion);
            return redirect('admin/category/');
         }
       }    
        elseif(isset($id))
         {
            $categories = new Categories();
            $category = $categories->find($id);
            return view('admin/categories/update', compact('category'), 'baseAdmin');               
         }
         else
         {
            return view('admin/categories/create', '', 'baseAdmin');
         }
    }

    public  function Slide(){
        $slide = new Sliders();
        $sliders = $slide->all();
        return view('admin/slide/home', compact('sliders'), 'baseAdmin');
    }

    public function newSlide($id){
        if($_POST){
            $request = (object) $_POST;
            $imagen = (object) $_FILES;
            if(isset($id)){
                $slide = new Sliders();
                $slide->update($request->title, $request->subtitle, $id);
                return redirect('admin/slide');
            }else{
                $dir_upload = '../resource/images/slide/';
                $name_real = $imagen->imagen['name'];
                if(move_uploaded_file($imagen->imagen['tmp_name'], $dir_upload . $name_real)){
                    $slide = new Sliders();
                    $slide->create($name_real, $request->title, $request->subtitle);
                    return redirect('admin/slide');
                }
                return redirect('admin/newslide');
            }
        }elseif(isset($id)){
            $slide = new Sliders();
            $slide = $slide->find($id);
            return view('admin/slide/update',compact('slide'),'baseAdmin');

        }else{
            return view('admin/slide/create','','baseAdmin');
        }

    }
    public function deleteSlide($id){
        $slide = new Sliders();
        $slide->destroy($id);
        return redirect('admin/slide');
    }

    public function deleteCategory($id)
    {
        $category = new Categories();
        $category->destroy($id);
        return redirect('admin/category');
    }

    public function slideupordown($id, $opc){
        $slide = new Sliders();
        $slide->upOrdown($id, $opc);
        return redirect('admin/slide');
    }
    public function About(){
        $request = (object) $_POST;
        $about = new Platform();
        $about->create($request->title, $request->contenido, $request->option);
        newFlashMessage('test', $request->option . " Actualizada.");
        
        //return redirect('admin');
    }

    public function __destruct()
    {

    }
}
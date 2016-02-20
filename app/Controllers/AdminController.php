<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Platform;
use App\Models\Sliders;
use App\Models\Users;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Services;
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
            $products = new Products();
            $products = $products->all();
            return view('admin/products/home', compact('products'), 'baseAdmin');
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

    public function Service(){
        if(self::isLogin()){
            $services = new Services();
            $services = $services->all();
            return view('admin/service/home', compact('services'), 'baseAdmin');
        }
        return redirect('admin');
    }
    public function Logout(){
        Auth::Logout();
        return redirect('admin');
    }

    public function newProduct($id)
    {
        $categories = new Categories();
        $categories = $categories->all();
        if($_POST)
        {
            $request = (object) $_POST;
            $imagen = (object) $_FILES;
            $product = new Products();
            if (isset($id))
            {
                $product->update($id, $request->nombre, $request->descripcion, $request->id_cat);
                newFlashMessage('test', 'Producto ' . ucwords($request->nombre) . " actualizada.");
                return redirect('admin/product');
            }
            else
            {
                $dir_file = '../resource/images/products/';
                $name_real = $imagen->imagen['name'];;
                if(move_uploaded_file($imagen->imagen['tmp_name'],$dir_file.$name_real))
                {
                    $product->create($request->nombre, $name_real, $request->descripcion, $request->id_cat);
                    newFlashMessage('test', 'Producto ' . ucwords($request->nombre) . " creado.");
                    return redirect('admin/product');
                }
                return redirect('admin/product');
            }
        }elseif(isset($id))
        {
            $product = new Products();
            $product = $product->find($id);
            return view('admin/products/update', compact('product','categories'), 'baseAdmin');
        }
        else
        {
            return view('admin/products/create', compact('categories'), 'baseAdmin');
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
                newFlashMessage('test', 'Categoria ' . ucwords($request->nombre) . " actualizada.");
                return redirect('admin/category');
            }
            else
            {
                $category->create($request->nombre, $request->descripcion);
                newFlashMessage('test', 'Categoria ' . ucwords($request->nombre) . " creada.");
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

    public function newService($id)
    {  
        if($_POST)
        {
            $request = (object) $_POST;
            $imagen = (object) $_FILES;
            $service = new Services();
            if (isset($id))
            {
                $service->update($id, $request->nombre, $request->descripcion);
                newFlashMessage('test', 'Servicio ' . ucwords($request->nombre) . " actualizada.");
                return redirect('admin/service');
            }
            else
            {
                $dir_file = '../resource/images/services/';
                $name_real = $imagen->imagen['name'];
                if(move_uploaded_file($imagen->imagen['tmp_name'],$dir_file.$name_real))
                {
                    $service->create($request->nombre, $name_real, $request->descripcion);
                    newFlashMessage('test', 'Servicio ' . ucwords($request->nombre) . " creado.");
                    return redirect('admin/service');
                }
                return redirect('admin/service');
            }
        }elseif(isset($id))
        {
            $service = new Services();
            $service = $service->find($id);
            return view('admin/service/update', compact('service'), 'baseAdmin');
        }
        else
        {
            return view('admin/service/create','', 'baseAdmin');
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
                newFlashMessage('test', 'Slide #: ' .$id. " actualizado.");
                return redirect('admin/slide');
            }else{
                $dir_upload = '../resource/images/slide/';
                $name_real = $imagen->imagen['name'];
                if(move_uploaded_file($imagen->imagen['tmp_name'], $dir_upload . $name_real)){
                    $slide = new Sliders();
                    $slide->create($name_real, $request->title, $request->subtitle);
                    newFlashMessage('test', 'Slide creado.');
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
        newFlashMessage('test', 'Slide #: ' . $id . " eliminado.");
        return redirect('admin/slide');
    }

    public function deleteCategory($id)
    {
        $category = new Categories();
        $category->destroy($id);
        newFlashMessage('test', 'Categoria eliminada');
        return redirect('admin/category');
    }

    public function deleteService($id)
    {
        $service = new Services();
        $service->destroy($id);
        newFlashMessage('test', 'Servicio eliminado');

        return redirect('admin/service');
    }

    public function productupordown($id, $opc)
    {
        $product = new Products();
        $product->upOrdown($id,$opc);
        return redirect('admin/product');
    }

    public function slideupordown($id, $opc){
        $slide = new Sliders();
        $slide->upOrdown($id, $opc);
        return redirect('admin/slide');
    }
    public function About(){
        $request = (object) $_POST;
        $about = new Platform();
        $about->update($request->title, $request->contenido, $request->option);
        newFlashMessage('test', ucwords($request->option) . " actualizada.");
        return redirect('admin');
    }

    public function __destruct()
    {

    }
}
<?php

include "app/Models/admin/indexModel.php";
class indexController
{
    public function __construct(){
        $this->controller = new indexModel();
        // put all product inside constructor to visable in all function
       

    }
    public function index()
    {
        
            $count = $this->controller->getCount();
            $count = $count[0]->prod;
            $user = $this->controller->getUser();
            $user = $user[0]->prod;
            $category = $this->controller->getCategory();
            $category = $category[0]->prod;
            $brand = $this->controller->getBrand();
            $brand = $brand[0]->prod;
            $this->render("admin/index/index",compact('count','user','category','brand'));
          
        }
        
    

   
    public function render($view, $varible = [])
    { 
        ob_start();
        extract($varible);
        include "app/Views/". $view . ".php";
        $content = ob_get_clean();
        include "app/Views/template/adminTamplate.php";
    }
}
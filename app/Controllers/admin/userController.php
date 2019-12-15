<?php
include "app/Models/admin/userModel.php";

class userController
{
    private $controller;
    public function __construct(){
        $this->controller = new userModel();

    }
    public function index(){
     $rows =   $this->controller->getAll();
     $this->render('admin/users/alluser',compact('rows'));
    }
    
    public function getOrder($number){
        $rows =  $this->controller->getById($number);
        $this->render('admin/users/allorder',compact('rows'));
    }
    public function update($id){
        $page =  $_GET['page'];
        if($page==1){
            $this->controller->edit($id,$page);
            $this->index();
        }else{
            $this->controller->edit($id,$page);
            $this->index();

        }
    }
    public function getUser($id){
       $customer =  $this->controller->getCustomer($id);
       $this->render('admin/users/allcustomer',compact('customer'));
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

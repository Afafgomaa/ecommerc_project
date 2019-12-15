<?php
include "app/Models/admin/aboutusModel.php";

class aboutusController
{
    private $controller;
    public function __construct(){
        $this->controller = new aboutusModel();

    }
    public function index(){
     $rows =   $this->controller->getAll();
     $this->render('admin/aboutus/allabout',compact('rows'));
    }

    public function edit($id){
       $rows = $this->controller->getById($id);
       $this->render('admin/aboutus/editabout',compact('rows'));
    }

    public function delete($id){
        $this->controller->deleteModel($id);
        $this->index();

    }

    public function create(){
        $this->render('admin/aboutus/addabout');
    }


    public function add(){
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            $data = [
                 'title'  => $_POST['title'],
                 'breif'  =>  $_POST['breif']
                   ];
        $this->controller->add($data);
        $this->index();
        }else{
            $this->index();
        }
    }
    public function update($id){
        if($_SERVER['REQUEST_METHOD']== 'POST'){
        $data = [
                    'title'=> $_POST['title'],
                    'breif'=>$_POST['breif']
                 ];
                 $this->controller->edit($id,$data);
                 $this->index();

    }else{
        $this->index();
    }}












































    public function render($view, $varible = [])
{ 
    ob_start();
    extract($varible);
    include "app/Views/". $view . ".php";
    $content = ob_get_clean();
    include "app/Views/template/adminTamplate.php";
    
}
}
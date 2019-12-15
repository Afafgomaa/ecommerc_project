<?php
include "app/Models/product/productModel.php";

class ProductController{

    public function __construct()
    {
        $this->model = new productModel();
    }
    public function index($id)
    {
        $product  = $this->model->reteriveSingleProduct($id);
        $category = $this->model->reteriveSingleProductRelatedCategory($product->category_id);
        $images   = $this->model->getImageGroup($id);      
        $deals    = $this->model->getWeek();
        $reviews  = $this->model->getReview($id);
     
       $this->model->render('product/single-product', compact('product',
                                                              'category',
                                                              'images',
                                                              'deals',
                                                              'reviews'));
    }

    public function confirm()
    {
        $order = $this->model->getLastOrder($_SESSION['id']);
        return $this->model->render('product/confirmation',compact('order'));
    }

    public function order($id)
    {

        $order   = $this->model->getOrderDeatials($id);
        
        
        return $this->model->render('product/order',compact('order'));
    }

    public function review($id)
    {
       
        $orderid = $id;
        $reviews = $this->model->getProductReviewRlatedToThisUser($_SESSION['id']);
        $avaliavleTowriteRate = true;
        for($i = 0 ; $i < count($reviews);  $i++){
         if($reviews[$i]->product_id == $orderid){
           $avaliavleTowriteRate = false;
         }
        }

        return $this->model->render('product/review',compact('orderid','reviews','avaliavleTowriteRate'));
    }


    public function compare()
    {
        return $this->model->render('product/compare');
    }

    public function getProductToComapre()
    {
         if(isset($_POST["query"]))  
         {  
              $output = '';  
              $query = "SELECT * FROM products WHERE title LIKE '%".$_POST["query"]."%'";
            
             $result =  $this->model->getProductForComapre($query); 
              $output = '<ul class="list-unstyled ">';  
              if($result)  
              {  
                foreach($result as $row){
                $output .= '<li data-id = '.$row->id.'>'.$row->title.'</li>';

              }
      
              }  
              else  
              {  
                   $output .= '<li>Product Not Found</li>';  
              }  
              $output .= '</ul>';  
              echo $output;  
         } 
            }



        public function getProduct()
        {
          $id = intval($_POST["query"]);
          $query = "SELECT * FROM products where id = $id";
          $product =  $this->model->getProductForComapre($query); 
          $data = array('id' => $product[0]->id,
                         'title' => $product[0]->title,
                         'p' => $product[0]->price_before,
                         'desc_s' => $product[0]->small_description ,
                         'price' => $product[0]->price_after,
                         'image' => $product[0]->image);
          $output =  json_encode($data);
          echo $output;
        }
           

  

}


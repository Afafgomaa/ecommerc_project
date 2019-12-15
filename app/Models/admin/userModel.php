<?php

include 'app/libaray/DB.php';


class userModel{
    private $db;
    private $table = "orders";
public function __construct(){

    $this->db = new Database();

}
public function getAll()
{
 $this->db->query("SELECT orders.* , customers.email AS customer_name 
                    FROM
                    orders
                    INNER JOIN
                    customers
                    ON
                    customers.id = cust_id
                ");

 $result = $this->db->All();
 return $result;
}
public function getById($number)
{
  $this->db->query("SELECT* FROM orders WHERE order_number = :number");
  $this->db->bind(':number',$number);
  $result = $this->db->ById();
  return $result;
}
public function edit($id,$page){
    if($page==1){
    $this->db->query("UPDATE orders SET 
                                        status = :status
                                        WHERE id = :id" );
                    
      $this->db->bind(':status', $page);
      $this->db->bind(':id', $id);
    $this->db->execute();
    
}else{
    $this->db->query("UPDATE orders SET 
    status = :status
    WHERE id = :id" );

$this->db->bind(':status', $page);
$this->db->bind(':id', $id);
$this->db->execute();
}
}
public function getCustomer($id){
    $this->db->query("SELECT* FROM customers WHERE id = :id");
    $this->db->bind(':id',$id);
    $result = $this->db->ById();
    return $result;  
}
}

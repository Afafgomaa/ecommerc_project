<?php
include 'app/libaray/DB.php';
include 'app/libaray/connection.php';

class indexModel{
    private $db;
public function __construct(){

    $this->db = new Database();
    $this->dbh  = connection::getInstance();

}
public function getCount(){

    $this->db->query("SELECT COUNT(*) as prod FROM products  ");
    $result =  $this->db->All();
     return $result; 
}
public function getuser(){

    $this->db->query("SELECT COUNT(*) as prod FROM customers  ");
    $result =  $this->db->All();
     return $result; 
}
public function getCategory(){

    $this->db->query("SELECT COUNT(*) as prod FROM categories  ");
    $result =  $this->db->All();
     return $result; 
}
public function getBrand(){

    $this->db->query("SELECT COUNT(*) as prod FROM brands  ");
    $result =  $this->db->All();
     return $result; 
}
}
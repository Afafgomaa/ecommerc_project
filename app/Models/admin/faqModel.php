<?php

include 'app/libaray/DB.php';


class faqModel{
    private $db;
    private $table = "faq";
public function __construct(){

    $this->db = new Database();

}
public function getAll(){
$this->db->query("SELECT * FROM faq ");
return $result = $this->db->All();

}
public function getById($id){
    return $this->db->getRow($id,$this->table);  
   }

   public function edit($id,$data){
    return $this->db->updateRow($this->table,$data,$id);
 
 
 }
 public function add($data){
    $this->db->addfeild($this->table,$data);
}
public function deleteModel($id){
    $this->db->deleteRow($id,$this->table); 
    }
}
<?php

//include 'app/libaray/connection.php';
include 'app/Models/commenMthodesModel.php';


class LoginModel 
{

use commenMthodesModel;

    

    public function __construct()
    {
        $this->dbh  = connection::getInstance();
   

    }
    public function retriveMenu()
    {
    $menus =   $this->dbh->last('menu');

    return $menus;

    } 
    public function retriveMenuChild()
    {

    $menusChilds = $this->dbh->all('menu_children');
    return $menusChilds;

    } 
    
    public function retrive()
    {
        $rows =   $this->dbh->all('setting');

        return $rows;

    } 

    public function login($email_user,$password_user)
    {
    

    $user = $this->dbh->queryBuilder("SELECT * FROM customers WHERE email = '$email_user' and password = '$password_user' ");
       if($user) {
           return true;
       }
       return false;
   

     }

     public function find($email)
     {
        $user = $this->dbh->get('customers', ['email' , '=', $email ])->first();
       
        return $user;
     }
     public function getUser($uinque_id)
        {

        return $this->dbh->get('customers', ['uinque_id', '=', $uinque_id])->first();
        

        } 


    
    
}






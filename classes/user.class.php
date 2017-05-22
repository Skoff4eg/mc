<?php
//namespace Classes;

class User{
    
    private $mail;
    
    
    public function __construct($mail){
        $this->mail = $mail;
        $this->db = new DB();
    }
    
    
    
    public function isAdmin(){
        echo ('1');
    }
}
?>
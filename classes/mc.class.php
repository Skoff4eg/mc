<?php

class MC{
    
    private $settings;
    
    private $log;
    
    private $parameters;
        
    
    public function __construct(){
        $this->Connect();
    }
    
    
    
    public function Connect(){
        $this->settings = parse_ini_file("mc_set.ini.php");
        
    }
    
    public function createStore(){
        
    }
    
    public function createCart(){
        
    }
    
    public function createProduct(){
        
    }
    
    public function createCustomer(){
        
    }
    
    public function createOrder(){
        
    }

}

?>
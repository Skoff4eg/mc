<?php


class ApiCalls{
    
    private $settings;
    
    public function __construct(){
        $this->Connect();
    }
    
    public function Connect(){
        $this->settings = parse_ini_file("mc_set.ini.php");
        
    }
}

?>
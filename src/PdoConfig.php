<?php

namespace DependencyInjectionTraining;

class PdoConfig
{
    private $config;
    
    public function __construct()
    {
     
        $this->config = array (
            'hostname' => 'localhost',
            'dbname' => 'PiotrNiro_Training',
            'username' => 'root',
            'password' => 'admin',
            'hello'
            );
    }
    
    public function getConfig()
    {
        return $this->config;
    }
}

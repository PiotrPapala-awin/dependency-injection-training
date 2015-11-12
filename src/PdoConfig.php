<?php

namespace DependencyInjectionTraining;

class PdoConfig
{
    /*
     * @var string		
     */
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

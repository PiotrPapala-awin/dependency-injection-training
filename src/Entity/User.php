<?php

namespace DependencyInjectionTraining\Entity;

class User
{
    private $id;
    private $name;
    private $emailAddress;
    
    public function __construct($name, $emailAddress)
    {
        $this->name = $name;
        $this->emailAddress = $emailAddress;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
}

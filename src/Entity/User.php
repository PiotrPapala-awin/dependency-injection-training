<?php

namespace DependencyInjectionTraining\Entity;

class User
{
    private $id;
    private $name;
    private $emailAddress;
    
    public function __construct($id, $name, $emailAddress)
    {
        $this->id = $id;
        $this->name = $name;
        $this->emailAddress = $emailAddress;
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

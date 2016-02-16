<?php

namespace DependencyInjectionTraining;

class Niro
{
    private $name;

    public function __construct($name)
    {
        $this->setName($name);
    }

    public function myName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

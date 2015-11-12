<?php

namespace DependencyInjectionTraining\Entity;

class User
{
    /*
     * @var int		
     */
    private $id;
 
    /*
     * @var string		
     */
    private $name;
       
    /*
     * @var string		
     */
    private $emailAddress;
    
    public function __construct($name, $emailAddress)
    {
        $this->name = $name;
        $this->emailAddress = $emailAddress;
    }
    
    /*
     * @param int $id		
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /*
     * @param string $name	
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /*
     * @param string $emailAddress		
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }
    
    /*
     * @return int		
     */
    public function getId()
    {
        return $this->id;
    }
 
    /*
     * @return string		
     */
    public function getName()
    {
        return $this->name;
    }
    
    /*
     * @return string		
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
}

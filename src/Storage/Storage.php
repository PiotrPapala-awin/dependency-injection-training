<?php

namespace DependencyInjectionTraining\Storage;

use DependencyInjectionTraining\Entity\User;
use DependencyInjectionTraining\PdoConfig;
use PDO;

class Storage
{
    private $db;
    
    public function __construct(PdoConfig $pdoconfig)
    {
        $this->db = new PDO(
            "mysql:host=" . $pdoconfig->getConfig()['hostname'] . ";dbname="
            . $pdoconfig->getConfig()['dbname'],
            $pdoconfig->getConfig()['username'],
            $pdoconfig->getConfig()['password']
        );
    }
    
    public function getDb()
    {
        return $this->db;
    }
    
    public function addUser(User $user)
    {
        $sql = "INSERT INTO users (name, emailAddress) VALUES (?, ?)";
        
        $query = $this->db->prepare($sql);
        $query->execute(array($user->getName(), $user->getEmailAddress()));
        $lastInsertId = $this->db->lastInsertId();
        $user->setId($lastInsertId);
        
        return $user;
    }
    
    public function findUser(User $user)
    {
        $sql = "SELECT * FROM users WHERE name = '".$user->getName()."' "
                . "AND emailAddress = '".$user->getEmailAddress()."'";
        
        $query = $this->db->query($sql);
        
        return $results = $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function updateUser(User $user)
    {
        $sql = "UPDATE users SET name = '".$user->getName()."' " .
                ", emailAddress = '".$user->getEmailAddress()."' " .
                " where id = '".$user->getId()."' ";
      
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $user;
    }
}

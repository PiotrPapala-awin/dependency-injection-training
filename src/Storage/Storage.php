<?php

namespace DependencyInjectionTraining\Storage;

use DependencyInjectionTraining\Entity\User;
use DependencyInjectionTraining\PdoConfig;
use PDO;

class Storage
{
  /*
   * @var string		
   */
    private $db;
    
    public function __construct(PdoConfig $PdoConfig)
    {
        $this->db = new PDO(
            "mysql:host=" . $PdoConfig->getConfig()['hostname'] . ";dbname=" .
            $PdoConfig->getConfig()['dbname'],
            $PdoConfig->getConfig()['username'],
            $PdoConfig->getConfig()['password']
        );
    }
    
    /*
     * @return string		
     */
    public function getDb()
    {
        return $this->db;
    }
    
    public function getAllUsers()
    {
        $sql = "SELECT * FROM users";
        
        $query = $this->db->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        
        return $results;
    }
    
    public function findUserById($id)
    {
        $sql = "SELECT * FROM users WHERE id = '".$id."' LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $resutls = $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function addUser(User $user)
    {
        $sql = "INSERT INTO users (`name`, `emailAddress`) VALUES (?, ?)";
        $query = $this->db->prepare($sql);
        
        $query->execute(array($user->getName(), $user->getEmailAddress()));
        $lastInsertId = $this->db->lastInsertId();
        $user->setId($lastInsertId);
        
        return $user;
    }
    
    public function findUser(User $user)
    {
        $sql = "SELECT * FROM users WHERE name = '".$user->getName()."' "
                . "AND emailAddress = '".$user->getEmailAddress()."' LIMIT 1";
        
        $query = $this->db->prepare($sql);
        $query->execute();
        
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    public function updateUser(User $user, $id)
    {
            $sql = "UPDATE users SET name = '".$user->getName()."' ".
                   ", emailAddress = '".$user->getEmailAddress()."'".
                    " where id = '".$id."' ";
        
            $query = $this->db->prepare($sql);
            $query->execute();

        return $this->findUser($user);
    }
    
    public function deleteUser(User $user)
    {
        $sql = "DELETE FROM users WHERE name = '".$user->getName()."' "
                . "AND emailAddress = '".$user->getEmailAddress()."' " ;
      
        $query = $this->db->prepare($sql);
        $query->execute();
 
        return $user;
    }
}

<?php

namespace DependencyInjectionTraining\Storage;

//require __DIR__ .'/config.php';

use DependencyInjectionTraining\Entity\User;
use DependencyInjectionTraining\PdoConfig;
use PDO;

class Storage
{
    private $db;
    
    public function __construct()
    {
        $config = new PdoConfig();
        $this->db = new PDO(
            "mysql:host=" . $config->getConfig()['hostname'] . ";dbname="
            . $config->getConfig()['dbname'],
            $config->getConfig()['username'],
            $config->getConfig()['password']
        );
    }
    
    public function getDb()
    {
        return $this->db;
    }
    
    public function add(User $user)
    {
        $sql = "INSERT INTO users (name, emailAddress) VALUES (?, ?)";
        
        $query = $this->db->prepare($sql);
        $query->execute(array($user->getName(), $user->getEmailAddress()));
        $lastInsertId = $this->db->lastInsertId();
        $user->setId($lastInsertId);
        return $user;
    }
    
    public function find(User $user)
    {
        $sql = "SELECT * FROM users WHERE name = '".$user->getName()."' "
                . "AND emailAddress = '".$user->getEmailAddress()."'";
        
        $query = $this->db->query($sql);
        return $results = $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function update(User $user, $whereClause = '')
    {
        $whereSQL = '';
        if (!empty($whereClause)) {
            if (substr(strtoupper(trim($whereClause)), 0, 5) != 'WHERE') {
                $whereSQL = " WHERE ".$whereClause;
            } else {
                $whereSQL = " ".trim($whereClause);
            }
        }
        
        $sql = "UPDATE users SET name = '".$user->getName()."' "
                . ", emailAddress = '".$user->getEmailAddress()."' " . " $whereClause ";
      
        $query = $this->db->prepare($sql);
        $query->execute();
 
        return $user;
    }
}

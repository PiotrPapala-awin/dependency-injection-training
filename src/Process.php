<?php

namespace DependencyInjectionTraining;

use DependencyInjectionTraining\Entity\User;
use DependencyInjectionTraining\Storage\Storage;

/**
 * Simple process to process some data.
 */

class Process
{
    private $notifier;
    public function __construct(NotifyInterface $notifier)
    {
          $this->notifier = $notifier;
    }
    
    public function process()
    {
        // Creating new 'User' and 'Storage' Objects
        $user = new User("Becky", "becky@test.com");
        $storage = new Storage();
        
        // Inserting and Selecting Users
        //$storage->add($user);

        //echo $message = "Newly inserted user is: '" . $user->getName() . "'"
          //      . " user's ID is: " .  $user->getId() . PHP_EOL;
        
       // $storage->find($user);
        
        //echo $message = "Queried user is: '" . $user->getName() . "'"
          //      . " user's ID is: " .  $user->getId() . PHP_EOL;
        
        // you can either pass 'WHERE id/name/emailAddress = "value"'
        $storage->update($user, 'WHERE emailAddress = "john@test.com"');
        
        $this->notifier->notify();
    }
}

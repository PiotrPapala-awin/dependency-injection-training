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
    private $storage;
    
    public function __construct(NotifyInterface $notifier, Storage $storage)
    {
          $this->notifier = $notifier;
          $this->storage = $storage;
    }
    
    public function process()
    {
        // Creating new 'User' and 'Storage' Objects
        $user = new User(2, "Becky", "becky@test.com");
     
        $this->storage->updateUser($user);
        
        $this->notifier->notify();
    }
}

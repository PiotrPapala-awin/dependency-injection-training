<?php

namespace DependencyInjectionTraining;

use DependencyInjectionTraining\Entity\User;

/**
 * Simple process to process some data.
 */

class Process
{
    private $notifier;
    private $storage;
    
    public function __construct(NotifyInterface $notifier, Storage\Storage $storage)
    {
          $this->notifier = $notifier;
          $this->storage = $storage;
    }
    
    public function process()
    {
        $user = new User("Ricky", "Ricky@test.com");
     
        $this->storage->updateUser($user, "2");
        
        $this->notifier->notify();
    }
}

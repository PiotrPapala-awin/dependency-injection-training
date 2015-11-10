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

        // you can either pass 'WHERE id/name/emailAddress = "value"'
        $updatedUser = $storage->update($user, 'WHERE emailAddress = "john@test.com"');
        $selectedUser = $storage->find($user);
         
        // Comparing if the updated and selected users are identical
        if ($updatedUser === $selectedUser) {
            echo "Update Successful, Below are user's details. \n"
            ."User's Name is :'". $updatedUser[0]["name"] ."'\n"
            ."User's email Id is :" .$updatedUser[0]["emailAddress"]. "'\n";
        } else {
            echo "User update was unsuccessful. \n";
        }
            
        $this->notifier->notify();
    }
}

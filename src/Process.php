<?php

namespace DependencyInjectionTraining;

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

    public function doSomething()
    {
        echo "Doing something here...\n";
      
        $this->notifier->notify();
    }
}

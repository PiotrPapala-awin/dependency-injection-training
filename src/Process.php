<?php

namespace DependencyInjectionTraining;

/**
 * Simple process to process some data.
 */
class Process
{
    /**
     * @var NotifyInterface
     */
    private $notifier;

    /**
     * @param NotifyInterface $notifier
     */
    public function __construct(NotifyInterface $notifier)
    {
          $this->notifier = $notifier;
    }

    /**
     * Do something
     */
    public function doSomething()
    {
        $this->notifier->notify();
    }
}

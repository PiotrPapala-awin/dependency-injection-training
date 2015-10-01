<?php

namespace DependencyInjectionTraining;

/**
 * Simple process to process some data.
 */
class Process
{
    /** @var  EmailNotifier */
    private $emailNotifier;


    public function __construct(EmailNotifier $emailNotifier)
    {
        // some comment here
        $this->emailNotifier = $emailNotifier;
    }

    public function doSomething()
    {
        echo "Doing anything...\n";

        // use notifier here
        $this->emailNotifier->notify('Super extra notification');

    }

}
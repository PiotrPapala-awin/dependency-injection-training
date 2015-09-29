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
        $this->emailNotifier = $emailNotifier;
    }

    public function doSomething()
    {
        echo "Doing something...\n";

        // use notifier here
        $this->emailNotifier->notify('Super extra notification');

    }

}
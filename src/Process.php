<?php

namespace DependencyInjectionTraining;

/**
 * Simple process to process some data.
 */
class Process
{
    public function __construct(EmailNotifier $emailNotifier)
    {

    }

    public function doSomething()
    {
        echo "Doing something...\n";
    }

}
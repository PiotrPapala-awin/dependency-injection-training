<?php

namespace DependencyInjectionTraining;

class SnailNotifier implements NotifyInterface
{

    public function notify()
    {
        // here comes the code of notification
        
        echo "Message from SnailNotifier class.\n";
    }
}

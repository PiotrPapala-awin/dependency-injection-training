<?php

namespace DependencyInjectionTraining;

class ConsoleNotifier implements NotifyInterface
{

    public function notify()
    {
        // here comes the code of notification
        
        echo "Message from ConsoleNotifier class.\n";
    }
}

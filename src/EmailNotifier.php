<?php

namespace DependencyInjectionTraining;

class EmailNotifier implements NotifyInterface
{

    public function notify()
    {
        // here comes the code of notification
        
        echo "Message from EmailNotfier class.\n";
    }
}

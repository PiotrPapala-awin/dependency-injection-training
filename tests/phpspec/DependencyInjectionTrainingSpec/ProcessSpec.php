<?php

namespace DependencyInjectionTrainingSpec\DependencyInjectionTraining;

use DependencyInjectionTraining\NotifyInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProcessSpec extends ObjectBehavior
{
    public function let(NotifyInterface $notifyInterface)
    {
        $this->beConstructedWith($notifyInterface);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('DependencyInjectionTraining\Process');
    }

    public function it_should_notify_the_notifier_when_doing_something(
        NotifyInterface $notifyInterface
    ) {
        $notifyInterface->notify()->shouldBeCalled();

        $this->doSomething();
    }
}

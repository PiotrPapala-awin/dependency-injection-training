<?php

namespace DependencyInjectionTrainingSpec\DependencyInjectionTraining;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NiroSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Niro');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('DependencyInjectionTraining\Niro');
    }

    function it_should_say_its_name()
    {
        $this->myName()->shouldReturn("Niro");
    }

    function it_should_be_able_to_change_the_name()
    {
        $this->setName('Piotr');
        $this->myName()->shouldReturn('Piotr');
    }
}

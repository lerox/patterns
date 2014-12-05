<?php

namespace Lerox\Patterns\Observer\Test;

use PHPUnit_Framework_TestCase;
use Lerox\Patterns\Observer\User;
use Lerox\Patterns\Observer\UserObserver;

class ObserverTest extends PHPUnit_Framework_TestCase
{
    private $observer;

    public function setUp()
    {
        $this->user = new User();
        $this->observer = new UserObserver();
    }

    public function testAttachAndDetachObserver()
    {
        $this->assertAttributeEmpty('observers', $this->user);
        $this->user->attach($this->observer);
        $this->assertAttributeNotEmpty('observers', $this->user);
        $this->user->detach($this->observer);
        $this->assertAttributeEmpty('observers', $this->user);
    }

    public function testCallingObserverUpdate()
    {
        $observer = $this->getMock('SplObserver');
        $observer->expects($this->once())
            ->method('updatxe')
            ->with($this->user);

        $this->user->attach($observer);

        $this->user->notify();
    }

    public function testGettingMessage()
    {
        $this->user->attach(new UserObserver());
        $this->user->setName('Leandro');

        $this->expectOutputString('Lerox\Patterns\Observer\User has been updated');
    }
}

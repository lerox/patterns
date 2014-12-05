<?php

namespace Lerox\Patterns\Observer;

/**
 * https://github.com/domnikl/DesignPatternsPHP/tree/master/Behavioral/Observer
 *
 * Observer pattern : The observed object (the subject)
 *
 * The subject maintains a list of Observers and sends notifications.
 *
 */
class User implements \SplSubject
{
    /**
     * user name
     *
     * @var string
     */
    protected $name;

    /**
     * observers
     *
     * @var array
     */
    protected $observers = array();

    /**
     * attach a new observer
     *
     * @param \SplObserver $observer
     *
     * @return void
     */
    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * detach an observer
     *
     * @param \SplObserver $observer
     *
     * @return void
     */
    public function detach(\SplObserver $observer)
    {
        $index = array_search($observer, $this->observers);

        if (false !== $index) {
            unset($this->observers[$index]);
        }
    }

    /**
     * notify observers
     *
     * @return void
     */
    public function notify()
    {
        /** @var \SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Setter to the name
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;

        // notify the observers, that user has been updated
        $this->notify();
    }
}

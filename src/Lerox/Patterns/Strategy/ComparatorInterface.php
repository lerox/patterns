<?php

namespace Lerox\Patterns\Strategy;

/**
 * https://github.com/domnikl/DesignPatternsPHP/tree/master/Behavioral/Strategy
 *
 * Class ComparatorInterface
 */
interface ComparatorInterface
{
    /**
     * @param mixed $a
     * @param mixed $b
     *
     * @return bool
     */
    public function compare($a, $b);
}

<?php

namespace Lerox\Patterns\Strategy;

/**
 * https://github.com/domnikl/DesignPatternsPHP/tree/master/Behavioral/Strategy
 *
 * Class DateComparator
 */
class DateComparator implements ComparatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function compare($a, $b)
    {
        $aDate = new \DateTime($a['date']);
        $bDate = new \DateTime($b['date']);
        if ($aDate == $bDate) {
            return 0;
        } else {
            return $aDate < $bDate ? -1 : 1;
        }
    }
}

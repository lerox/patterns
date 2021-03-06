<?php

namespace Lerox\Patterns\FactoryMethod;

/**
 * https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/FactoryMethod
 *
 * Bicycle is a bicycle
 */
class Bicycle implements VehicleInterface
{
    /**
     * @var string
     */
    protected $color;

    /**
     * sets the color of the bicycle
     *
     * @param string $rgb
     */
    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}

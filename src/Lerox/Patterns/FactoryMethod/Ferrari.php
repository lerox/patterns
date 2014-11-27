<?php

namespace Lerox\Patterns\FactoryMethod;

/**
 * https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/FactoryMethod
 *
 * Ferrari is a italian car
 */
class Ferrari implements VehicleInterface
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @param string $rgb
     */
    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}

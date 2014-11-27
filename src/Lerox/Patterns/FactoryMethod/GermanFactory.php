<?php

namespace Lerox\Patterns\FactoryMethod;

/**
 * https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/FactoryMethod
 *
 * GermanFactory is a vehicle factory in Germany
 */
class GermanFactory extends FactoryMethod
{
    /**
     * {@inheritdoc}
     */
    protected function createVehicle($type)
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST:
                $obj = new Porsche();
                // we can specialize the way we want some concrete Vehicle since
                // we know the class
                $obj->addTuningAMG();

                return $obj;
                break;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}

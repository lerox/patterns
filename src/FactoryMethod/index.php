<?php

namespace Lerox\Patterns\FactoryMethod;

require '../../vendor/autoload.php';

$germanFactory = new GermanFactory();
$italianFactory = new ItalianFactory();

var_dump($germanFactory->create(FactoryMethod::CHEAP));
var_dump($germanFactory->create(FactoryMethod::FAST));

var_dump($italianFactory->create(FactoryMethod::CHEAP));
var_dump($italianFactory->create(FactoryMethod::FAST));

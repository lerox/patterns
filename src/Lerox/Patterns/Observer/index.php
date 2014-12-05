<?php

namespace Lerox\Patterns\Observer;

require '../../../../vendor/autoload.php';

$user = new User();
$user->attach(new UserObserver());

var_dump($user);
$user->setName('Leandro');
var_dump($user);

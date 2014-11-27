<?php

/**
 * http://runnable.com/UoGy6cV8wh0cAABs/strategy-design-pattern-in-php
 *
 * Strategy pattern allows us to define different strategies and easily
 * switch between them.
 *
 * We have a ObjectCollection which is a sortable data storage class.
 * We define two strategies: compare by date and compare by id.
 * As you can see, switching between them or adding a new one
 * does not require modifying any of the classes.
 *
 * --
 *
 * O pattern Strategy permite definir estratégias diferentes e facilmente
 * Alternar entre elas.
 *
 * Temos um ObjectCollection que é uma classe de armazenamento de dados classificáveis.
 * Nós definimos duas estratégias: comparar por data e comparar por id.
 * Como você pode ver, alternar entre elas ou até mesmo a adição de uma nova estratégia
 * não requer modificar qualquer uma das classes.
 */

namespace Lerox\Patterns\Strategy;

require '../../../../vendor/autoload.php';

$elements = array(
    array(
        'id' => 2,
        'date' => '2011-01-01',
    ),
    array(
        'id' => 1,
        'date' => '2011-02-01'
    )
);

$collection = new ObjectCollection($elements);

$collection->setComparator(new IdComparator());
$collection->sort();
print_r($collection->elements);

$collection->setComparator(new DateComparator());
$collection->sort();
print_r($collection->elements);

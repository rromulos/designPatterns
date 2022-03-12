<?php

/**
 * PROTOTYPE - Design Pattern (GoF)
 * To avoid the cost of creating objects the standard way (new Foo()) and instead create a prototype and clone it.
 */

require_once('../classes/BrandAPenPrototype.php');
require_once('../classes/BrandBPenPrototype.php');

$brandA = new BrandAPenPrototype();
$brandB = new BrandBPenPrototype();

$brandARed = clone $brandA;
$brandARed->setColor('red');

$brandABlue = clone $brandA;
$brandABlue->setColor('blue');

$brandBRed = clone $brandB;
$brandBRed->setColor('red');

$brandBBlue = clone $brandB;
$brandBBlue->setColor('blue');

var_dump($brandARed);
var_dump($brandABlue);
var_dump($brandBRed);
var_dump($brandBBlue);
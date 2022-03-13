<?php

/**
 * DECORATOR Design Pattern (GoF)
 * 
 * An alternative to creating subclasses to extend functionality. 
 * The intent is to dynamically attach flexible additional responsibilities to an object.
 * Improves object extensibility as changes are made by coding new classes.
 * Simplifies development by allowing a series of classes with specific functionality, instead of coding all the behavior in the object.
 */

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once('../classes/SeafoodSandwich.php');
require_once('../classes/RoastBeefSandwich.php');
require_once('../classes/Pickles.php');
require_once('../classes/Cheddar.php');
require_once('../classes/Bacon.php');

$seafood = new SeafoodSandwich();
$seafood = new Pickles($seafood);

echo $seafood->getName()." price = $" . $seafood->price() ."<br>";

$roastBeef = new RoastBeefSandwich();
$roastBeef = new Cheddar($roastBeef);
$roastBeef = new Bacon($roastBeef);

echo $roastBeef->getName() . " price = $" . $roastBeef->price();
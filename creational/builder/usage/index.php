<?php

/**
 * BUILDER - Design Pattern (GoF)
 * 
 * Separate the construction of a complex object from its representation so that the same construction processes can create different representations.
 * In that example, if you need to construct a different object you can create a new builder and set the needed properties
 */

require_once('../classes/Sandwich.php');
require_once('../classes/SandwichBuilder.php');

error_reporting(E_ALL);
ini_set('display_errors', 'on');

$sandwich = (new SandwichBuilder())->getSandwich()->make();
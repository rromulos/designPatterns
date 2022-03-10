<?php

require_once ('../classes/Singleton.php');

/**
 * SINGLETON - Design Pattern
 * 
 * Ensures the creation of a single instance of a class across the entire application, maintaining a global point of access to your object.
 * Lazy Construction.
 * There are no parameters for its construction.
 * 
 * Anti Pattern?
 * (original pattern) Not thread safe.
 * High Coupling
 * Global access of an object
 * May be a problem for unit tests (returning always the same instance)
 */

$s1 = Singleton::getInstance();
var_dump($s1);

$s2 = Singleton::getInstance();
var_dump($s2);

//both ($s1 and $s2) will have to the same instance

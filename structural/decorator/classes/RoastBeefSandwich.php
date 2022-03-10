<?php

require_once('Sandwich.php');
require_once('../interfaces/SandwichInterface.php');

class RoastBeefSandwich extends Sandwich implements SandwichInterface
{
    public function __construct ()
    {
        $this->setName('RoastBeefSandwich');
    }

    public function price ()
    {
        return 10.00;
    }
}
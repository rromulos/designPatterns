<?php

require_once('Sandwich.php');
require_once('../interfaces/SandwichInterface.php');

class SeafoodSandwich extends Sandwich implements SandwichInterface
{
    public function __construct ()
    {
        $this->setName('SeafoodSandwich');
    }

    public function price ()
    {
        return 15.00;
    }
}
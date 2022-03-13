<?php

require_once('Sandwich.php');

class RoastBeefSandwich extends Sandwich
{
    public function __construct ()
    {
        $this->setName('RoastBeef Sandwich');
    }

    public function price ()
    {
        return 10.00;
    }
}
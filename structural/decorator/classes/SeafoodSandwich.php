<?php

require_once('Sandwich.php');

class SeafoodSandwich extends Sandwich
{
    public function __construct ()
    {
        $this->setName('Seafood Sandwich');
    }

    public function price ()
    {
        return 15.00;
    }
}
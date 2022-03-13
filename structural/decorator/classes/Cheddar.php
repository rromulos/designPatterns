<?php

require_once('ExtraDecorator.php');

class Cheddar extends ExtraDecorator
{
    private $sandwich;

    public function __construct(Sandwich $sandwich)
    {
        $this->sandwich = $sandwich;
    }

    public function getName ()
    {
        return $this->sandwich->getName() . ", Cheddar";
    }

    public function price ()
    {
        return 2.50 + $this->sandwich->price();
    }
}
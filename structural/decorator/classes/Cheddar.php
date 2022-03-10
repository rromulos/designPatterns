<?php

require_once('ExtraDecorator.php');
require_once('../interfaces/SandwichInterface.php');

class Cheddar extends ExtraDecorator implements SandwichInterface
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
        return 2 + $this->sandwich->price();
    }
}
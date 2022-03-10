<?php

require_once('ExtraDecorator.php');
require_once('../interfaces/SandwichInterface.php');

class Pickles extends ExtraDecorator implements SandwichInterface
{
    private $sandwich;

    public function __construct(Sandwich $sandwich)
    {
        $this->sandwich = $sandwich;
    }

    public function getName ()
    {
        return $this->sandwich->getName() . ", Pickles";
    }

    public function price ()
    {
        return 1 + $this->sandwich->price();
    }
}
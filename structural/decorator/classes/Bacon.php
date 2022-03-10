<?php

require_once('ExtraDecorator.php');
require_once('../interfaces/SandwichInterface.php');

class Bacon extends ExtraDecorator implements SandwichInterface
{
    private $sandwich;

    public function __construct(Sandwich $sandwich)
    {
        $this->sandwich = $sandwich;
    }

    public function getName ()
    {
        return $this->sandwich->getName() . ", Bacon";
    }

    public function price ()
    {
        return 3 + $this->sandwich->price();
    }
}
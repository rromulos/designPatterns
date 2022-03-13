<?php

require_once('ExtraDecorator.php');

class Bacon extends ExtraDecorator
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
        return 3.25 + $this->sandwich->price();
    }
}
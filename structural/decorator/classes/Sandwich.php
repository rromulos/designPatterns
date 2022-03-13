<?php 

require_once('../interfaces/SandwichInterface.php');

abstract class Sandwich implements SandwichInterface
{
    protected $name;

    public function setName ($name)
    {
        $this->name = $name;
    }

    public function getName ()
    {
        return $this->name;
    }

    abstract function price();
}
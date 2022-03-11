<?php

require_once('SandwichBuilder.php');
require_once('../interfaces/SandwichBuilderInterface.php');

class SandwichBuilder implements SandwichBuilderInterface
{
    private $sandwich;

    public function __construct()
    {
        $this->sandwich = new Sandwich();
        $this->buildBurger();
        $this->buildSalad();
        $this->buildCheese();
        $this->buildExtra();
    }

    public function getSandwich()
    {
        return $this->sandwich;
    }

    public function buildBurger()
    {
        $this->sandwich->setBurguer(true);
    }

    public function buildSalad()
    {
        $this->sandwich->setLettuce(true);
        $this->sandwich->setTomato(true);
    }

    public function buildCheese()
    {
        $this->sandwich->setCheese(true);
    }

    public function buildExtra()
    {
        $this->sandwich->setBacon(true);
        $this->sandwich->setEgg(true);
    }

}
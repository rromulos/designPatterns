<?php

require_once('AbstractPenPrototype.php');

class BrandAPenPrototype extends AbstractPenPrototype
{
    protected $brand;

    public function __construct()
    {
        $this->setBrand('Brand A');
    }

    public function __clone(){}

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
}
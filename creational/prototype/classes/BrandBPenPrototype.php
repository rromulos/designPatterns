<?php

require_once('AbstractPenPrototype.php');

class BrandBPenPrototype extends AbstractPenPrototype
{
    protected $brand;

    public function __construct()
    {
        $this->setBrand('Brand B');
    }

    public function __clone(){}

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
}
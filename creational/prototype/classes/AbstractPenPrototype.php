<?php

abstract class AbstractPenPrototype
{
    protected $color;
    protected $brand;

    abstract public function __clone();

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}
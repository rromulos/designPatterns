<?php

class Sandwich
{
    private $bread;
    private $burger;
    private $lettuce;
    private $tomato;
    private $cheese;
    private $bacon;
    private $ham;
    private $egg;

    public function setBread($bread)
    {
        $this->bread = $bread;
    }

    public function getBread()
    {
        return $this->bread;
    }

    public function setBurguer($burger)
    {
        $this->burger = $burger;
    }

    public function getBurger()
    {
        return $this->burger;
    }

    public function setLettuce($lettuce)
    {
        $this->lettuce = $lettuce;
    }

    public function getLettuce()
    {
        return $this->lettuce;
    }

    public function setTomato($tomato)
    {
        $this->tomato = $tomato;
    }

    public function getTomato()
    {
        return $this->tomato;
    }

    public function setCheese($cheese)
    {
        $this->cheese = $cheese;
    }

    public function getCheese()
    {
        return $this->cheese;
    }

    public function setBacon($bacon)
    {
        $this->bacon = $bacon;
    }

    public function getBacon()
    {
        return $this->bacon;
    }

    public function setHam($ham)
    {
        $this->ham = $ham;
    }

    public function getHam()
    {
        return $this->ham;
    }

    public function setEgg($egg)
    {
        $this->egg = $egg;
    }

    public function getEgg()
    {
        return $this->egg;
    }    

    public function make()
    {
        echo "Sandwich is ready";
    }
}
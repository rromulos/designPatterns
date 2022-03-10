<?php

require_once('../interface/OrderInterface.php');

class Order implements OrderInterface
{
    private $total;

    public function setTotal ($total)
    {
        $this->total = $total;
    }

    public function getTotal ()
    {
        return $this->total;
    }
}
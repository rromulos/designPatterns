<?php

require_once ('../interface/TaxCalculatorStrategyInterface.php');

class BankB implements TaxCalculatorStrategyInterface
{
    public function getTaxRate (OrderInterface $order)
    {
        return $order->getTotal() * 1.2;
    }
}
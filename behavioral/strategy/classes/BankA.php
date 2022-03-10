<?php

require_once ('../interface/TaxCalculatorStrategyInterface.php');

class BankA implements TaxCalculatorStrategyInterface
{
    public function getTaxRate (OrderInterface $order)
    {
        return $order->getTotal() * 1.1;
    }
}
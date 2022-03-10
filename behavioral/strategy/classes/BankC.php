<?php

require_once ('../interface/TaxCalculatorStrategyInterface.php');

class BankC implements TaxCalculatorStrategyInterface
{
    public function getTaxRate (OrderInterface $order)
    {
        return $order->getTotal() * 1.3;
    }
}
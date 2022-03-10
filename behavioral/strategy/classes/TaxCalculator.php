<?php

require_once ('../interface/TaxCalculatorStrategyInterface.php');

class TaxCalculator
{
    private $taxCalculator;

    public function __construct (TaxCalculatorStrategyInterface $taxCalculator)
    {
        $this->taxCalculator = $taxCalculator;
    }

    public function calculateTax (Order $order)
    {
        return $this->taxCalculator->getTaxRate($order);
    }
}
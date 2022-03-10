<?php

require_once ('OrderInterface.php');

interface TaxCalculatorStrategyInterface
{
    public function getTaxRate (OrderInterface $order);
}
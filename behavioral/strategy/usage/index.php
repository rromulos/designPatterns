<?php

/**
 * STRATEGY - Design Pattern (GoF)
 * 
 * Encapsulates similar algorithms to make some decision.
 * The class that uses the algorithms is not changed, even with other algorithm options (Open/Closed Principle).
 */

require_once ('../classes/Order.php');
require_once ('../classes/TaxCalculator.php');
require_once ('../classes/BankA.php');
require_once ('../classes/BankB.php');
require_once ('../classes/BankC.php');

 $order = new Order();
 $order->setTotal(1000);

 //Calculating taxes bases on Bank A
 $calculator = new TaxCalculator(new BankA());
 echo $calculator->calculateTax($order);

 echo "<br>";

 //Calculating taxes bases on Bank B
 $calculator = new TaxCalculator(new BankB());
 echo $calculator->calculateTax($order);

 echo "<br>";

 //Calculating taxes bases on Bank C
 $calculator = new TaxCalculator(new BankC());
 echo $calculator->calculateTax($order);


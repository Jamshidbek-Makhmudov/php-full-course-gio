<?php 
include "Transaction.php";

// $transaction=new Transaction(100,"Transaction");
// $transaction->addTax(8);
// $transaction->applyDiscount(10);
// echo "<pre>";
// var_dump($transaction->getAmount());
// echo "<pre>";


//chaining:

$transaction1=(new Transaction(100,"Transaction 1"))
->addTax(8)
->applyDiscount(10);


$transaction2=(new Transaction(200,"Transaction 2"))
->addTax(8)
->applyDiscount(15);


//unset($transaction1);

var_dump($transaction1->getAmount(), $transaction2->getAmount() )









?>
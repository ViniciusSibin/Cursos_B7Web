<?php
require 'calculator.php';

$calc = new Calculator();
$calc->add(24);
$calc->add(2);
$calc->sub(1);
$calc->multply(3);
$calc->divide(2);
$calc->add(0.5);

echo "TOTAL: ".$calc->total();


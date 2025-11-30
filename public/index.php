<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Calculator;

$calc = new Calculator();

echo "2 + 3 = " . $calc->add(2, 3);

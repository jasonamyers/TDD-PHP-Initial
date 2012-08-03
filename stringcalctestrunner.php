<?php
// String Calculator Test Runner

require_once('stringcalctest.php');
require_once('PHPUnit/Autoload.php');

$suite = new PHPUnit_TestSuite("StringCalculatorTests");
$results = PHPUnit::run($suite);

echo $results -> toString();

?>
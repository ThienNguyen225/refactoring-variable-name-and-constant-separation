<?php
include "calculator/Calculator.php";

class CalculatorTest
{
public function testCalculateAdd()
{
    $firstOperand = 1;
    $secondOperand = 1;
    $operator = ADDITION;

    $expected = 2;

    $calculator = new Calculator();
    $result = $calculator->calculate($firstOperand, $secondOperand, $operator);
}
}

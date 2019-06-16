<?php
const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

class Calculator
{
    public function calculate($firstOperand, $secondOperand, $operator)
    {
        switch ($operator) {
            case ADDITION:
                return $firstOperand + $secondOperand;
                break;
            case SUBTRACTION:
                return $firstOperand - $secondOperand;
                break;
            case MULTIPLICATION:
                return $firstOperand * $secondOperand;
                break;
            case DIVISION:
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                    break;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo("Unsupported operation");
        }
    }
}
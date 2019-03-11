<?php

namespace App;

use Moontoast\Math\BigNumber;

class Multiply
{
    public function multiplyBy5(int $number)
    {
        $number = new BigNumber($number);
        $number->multiply(5);
        return intval($number->getValue());
    }

    public function multiplyBy6(int $number2)
    {
    	$number2 = new BigNumber($number2);
        $number2->multiply(6);
        return intval($number2->getValue());
    }

    public function multiplyBy7(int $number2)
    {
        $number2 = new BigNumber($number2);
        $number2->multiply(7);
        return intval($number2->getValue());
    }
}

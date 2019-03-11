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
        $number2 = new BigNumber($number2);
        $number2->multiply(7);
        return intval($number2->getValue());
    }
}

<?php

// The final keyword prevents child classes from overriding a method or constant by prefixing the definition with final.
// If the class itself is being defined final then it cannot be extended.

class GeneralCalculator
{
    final public function calculatePercentage( $part, $whole )
    {
        return ( $part / $whole ) * 100;
    }
}

class FinanceCalculator extends GeneralCalculator
{
    // public function calculatePercentage( $part, $whole )
    // {
    //     return $part / ( $whole * 100 );
    // }
}

$part  = 5;
$whole = 10;
// $generalCalculator = new GeneralCalculator();
// echo $generalCalculator->calculatePercentage( $part, $whole );

$financeCalculator = new FinanceCalculator();
// echo $financeCalculator->calculatePercentage( $part, $whole );

// So The Solution is to make the function final or if your class is made for specific purpose then make the class final

final class PercentageCalculator
{
    public function calculatePercentage( $part, $whole )
    {
        return ( $part / $whole ) * 100;
    }
}

$percentageCalculator = new PercentageCalculator();
echo $percentageCalculator->calculatePercentage( $part, $whole );

<?php

namespace Crystal\CatBowl;

abstract class Animal
{
    public function __construct(private string $name){}

    public function eat(Bowl $bowl, float $amount)
    {
        if ($bowl->reduceFoodAmount($amount))
        {
            echo "$this->name ate $amount grams food from bowl. Remains: {$bowl->getFoodAmount()}".PHP_EOL;
            return true;
        }

        echo "Not enough food in bowl".PHP_EOL;
    }
}
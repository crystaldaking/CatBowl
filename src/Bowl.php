<?php

namespace Crystal\CatBowl;

class Bowl
{
    public function __construct(private float $foodAmount){}

    /**
     * Set food amount
     * @param float $foodAmount
     */
    public function setFoodAmount(float $foodAmount): void
    {
        $this->foodAmount = $foodAmount;
    }

    /**
     * Get food amount
     * @return float
     */
    public function getFoodAmount(): float
    {
        return $this->foodAmount;
    }

    /**
     * Add food (not set)
     * @param float $amount
     * @return void
     */
    public function addFoodAmount(float $amount) : void
    {
        $this->foodAmount += $amount;
    }

    /**
     * Reduce food amount
     * @param float $amount
     * @return bool
     */
    public function reduceFoodAmount(float $amount) : bool
    {
        if ($this->foodAmount >= $amount)
        {
            $this->foodAmount -= $amount;
            return true;
        }

        return false;
    }
}
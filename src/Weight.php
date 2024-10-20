<?php

namespace ReyAtwel\WeightConversion;

use JetBrains\PhpStorm\Pure;

class Weight
{
    private const KG_PER_LB = 0.45359237;
    private const KG_PER_ST = 6.35029;

    #[Pure]
    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(protected float $kilograms)
    {

    }

    /**
     * Converts Kilograms to Pounds
     *
     * @return float
     */
    public function toPounds(): float
    {
        return $this->kilograms / self::KG_PER_LB;
    }

    /**
     * Converts Kilograms to Stones
     *
     * @return float
     */
    public function toStones(): float
    {
        return $this->kilograms / self::KG_PER_ST;
    }
}

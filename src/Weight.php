<?php

namespace ReyAtwel\WeightConversion;

use JetBrains\PhpStorm\Pure;

class Weight {
    private const FACTOR = 0.45359237;

    #[Pure]
    public static function kilograms(float $kilograms): self {
        return new static($kilograms);
    }

    public function __construct(protected float $kilograms) {

    }

    /**
     * @return float
     */
    public function toPounds(): float {
        return $this->kilograms / self::FACTOR;
    }
}

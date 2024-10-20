<?php

use ReyAtwel\WeightConversion\Weight;
use PHPUnit\Framework\Assert;

it('can convert kilograms to pounds', function () {
    $kilograms = 100;
    $pounds = Weight::kilograms($kilograms)->toPounds();

    Assert::assertEqualsWithDelta($pounds, 220.46226218487758072297380134503, 0.0000001);
});

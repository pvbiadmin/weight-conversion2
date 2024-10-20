<?php

use PHPUnit\Framework\Assert;
use ReyAtwel\WeightConversion\Weight;

it('can convert kilograms to pounds correctly', function () {
    $kilograms = 100;
    $pounds = Weight::kilograms($kilograms)->toPounds();

    Assert::assertEqualsWithDelta($pounds, 220.46226218487758072297380134503, 0.0000001);
});

it('can convert kilograms to stones correctly', function () {
    $kilograms = 100;
    $pounds = Weight::kilograms($kilograms)->toStones();

    Assert::assertEqualsWithDelta($pounds, 15.747312327468509312173144848503, 0.0000001);
});

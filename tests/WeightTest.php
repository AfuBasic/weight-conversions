<?php

use Afubasic\WeightConversions\Weight;

it('can covert kilograms to pounds correctly', function () {
    $pounds = Weight::kilograms(10)->toPounds();
    expect($pounds)->toEqual(22.046);
});

it('can convert to stones correctly', function () {
    $stones = Weight::kilograms(100)->toStones();
    expect($stones)->toEqual(15.747);
});

<?php

use Afubasic\WeightConversions\WeightConversionsClass;

it('can covert kilograms to pounds correctly', function(){
    $pounds = WeightConversionsClass::kilograms(10)->toPounds();
    expect($pounds)->toEqual(22.046);
});

it('can convert to stones correctly', function(){
    $stones = WeightConversionsClass::kilograms(100)->toStones();
    expect($stones)->toEqual(15.747);
});
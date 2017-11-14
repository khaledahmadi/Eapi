<?php

use Faker\Generator as Faker;
use App\Model\Products;

$factory->define(App\Model\Reviews::class, function (Faker $faker) {
    return [
        //
        'products_id'=> function(){
            return Products::all()->random();
        },
        'customer'=>$faker->name,
        'review'=>$faker->paragraph,
        'star'=>$faker->numberBetween(0,5)
    ];
});

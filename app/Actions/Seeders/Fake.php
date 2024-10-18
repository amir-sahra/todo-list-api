<?php

namespace App\Actions\Seeders;

use Faker;

class Fake
{
    public Faker\Generator $faker;

    public function __construct()
    {
        $this->faker = Faker\Factory::create();
    }
}

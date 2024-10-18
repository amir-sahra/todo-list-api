<?php

namespace App\Actions\Seeders\User;


use App\Actions\Seeders\Fake;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateFakeUser extends Fake
{
    public function __invoke($count): void
    {
        foreach (range(0, $count - 1) as $i) {
            User::create([
                'name' => $this->faker->firstName,
                'email' => $this->faker->unique()->safeEmail,
                'password' => Hash::make('123456789')
            ]);
        }
    }
}

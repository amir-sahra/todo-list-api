<?php

namespace App\Actions\Seeders\User;

use App\Actions\Seeders\Fake;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateDefaultAdmin extends Fake
{
    public function __invoke(): void
    {
        User::create([
            'name' => 'amirsahra',
            'type' => 'admin',
            'email' => 'amirhosein.sahra@gmail.com',
            'password' => Hash::make('123456789Q'),
        ]);
    }
}

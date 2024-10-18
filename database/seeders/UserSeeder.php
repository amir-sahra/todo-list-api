<?php

namespace Database\Seeders;

use App\Actions\Seeders\User\CreateFakeUser;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $createFakeUser = new CreateFakeUser();
        $createFakeUser(100);
    }

}

<?php

namespace Database\Seeders;

use App\Actions\Seeders\User\CreateDefaultAdmin;
use App\Actions\Seeders\User\CreateFakeUser;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(CreateFakeUser $createFakeUser, CreateDefaultAdmin $createDefaultAdmin): void
    {
        $createDefaultAdmin();
        $createFakeUser(20);
    }

}

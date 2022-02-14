<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'reza',
            'email' => 'rezarostaminikoo@gmail.com',
            'password' => bcrypt('password')
        ]);
        UserFactory::new()->count(10)->create();
    }
}

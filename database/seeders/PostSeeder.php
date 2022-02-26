<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function (User $user) {
            PostFactory::new()->count(20)->create(['author_id' => $user->id]);
        });
    }
}

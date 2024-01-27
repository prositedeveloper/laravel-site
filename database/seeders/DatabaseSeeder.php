<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AdminUser;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::factory(1)->create([
            'name' => 'Admin',
            'email' => 'laravel@laravel.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(10)->create();
        Post::factory(10)->create();
    }
}

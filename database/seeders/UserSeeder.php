<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Admin Bus',
            'level' => 'admin',
            'email' => 'panda@admin.com',
            'password' => bcrypt('12345'), 
            'remember_token' => Str::random(60),
        ]);
    }
}

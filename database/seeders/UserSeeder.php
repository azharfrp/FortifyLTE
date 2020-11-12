<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@email.com',
            'password'  => bcrypt('123456789'),
        ])->assignRole('admin');

        User::create([
            'name'      => 'User',
            'email'     => 'user@email.com',
            'password'  => bcrypt('12345678'),
        ])->assignRole('user');
    }
}

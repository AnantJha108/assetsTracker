<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = [
            'name' => 'Anant',
            'email' => 'anantjhapurnea@gmail.com',
            'password' => Hash::make('1234'),
        ];
        User::create($data);
    }
}

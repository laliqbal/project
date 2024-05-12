<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Bang Cok',
                'username' => 'cokstore',
                'email' => 'coks@gmail.com',
                'password' => Hash::make('bangcok123')
            ]
        ];

            foreach ($users as $user){
                User::insert($user);
            }
    }
}

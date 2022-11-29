<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WihtoutModelEvents;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array([
            'name' => 'Md.Meherul Islam', 
            'email' => 'meherul@gmail.com',
            'password' => Hash::make('12345678'),
            'status' => 'active'
        ],
        [
            'name' => 'Abol', 
            'email' => 'bolA.com',
            'password' => Hash::make('123123'),
            'status' => 'inactive'
        ],
    );
    foreach ($users as $key => $user) {
        # code...
        User::create($user);
    }

    }
}
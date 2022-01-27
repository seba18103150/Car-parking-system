<?php

namespace Database\Seeders;

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
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('18103150'),
            'role'=>'admin',
            
        ]);

        User::create([
            'name'=>'Manager',
            'email'=>'manager@gmail.com',
            'password'=>bcrypt('0000'),
            'role'=>'manager',
            
        ]);
    
    }
}

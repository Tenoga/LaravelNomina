<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;





class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(10)->create();
        foreach ($users as $user){
            if ($user->is_admin) {
                $user->assignRole('Admin');
            }else {
                $user->assignRole('Employee');
            };
        };

        //-------------------Usuario unico--------------//
        User::Create([
            'name' => 'David Felipe Castro Herrera' ,
            'email' => 'castroherreradavid@gmail.com',
            'phone' => '3192097403',
            'hours' => random_int(10, 120),
            'password' => bcrypt('changeme'),
            'remember_token' => Str::random(10), 
            'is_admin' => '1',
            'category' => 'C',
        ])->assignRole('Admin');
    }
}



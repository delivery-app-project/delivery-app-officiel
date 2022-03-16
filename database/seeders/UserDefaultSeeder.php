<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $password = 'password';

        DB::table('users')->insert(
            [
                [
                    'email' => 'user-mar@test.com',
                    'password' => Hash::make($password),
                    'first_name' => 'user',
                    'last_name' => 'for test',
                    'phone' => '0111111111',
                    
                ],
                [
                    'email' => 'user-tr@test.com',
                    'password' => Hash::make($password),
                    'first_name' => 'Transporter',
                    'last_name' => 'for test',
                    'phone' => '01111111112',
                ],
            ]

            );
    }
}

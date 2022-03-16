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
                    'name' => 'User for test',
                    'email' => 'user-mar@test.com',
                    'password' => Hash::make($password),
                ],
                [
                    'name' => 'Transporter for test',
                    'email' => 'user-tr@test.com',
                    'password' => Hash::make($password),
                ],
            ]

            );
    }
}

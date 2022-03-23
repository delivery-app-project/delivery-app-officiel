<?php

namespace Database\Seeders;

use App\Entities\Address;
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
        
        $adr = Address::create(
            
            [
                'district' => 'district name 1',
                'city_id' => 1
            ]
         );

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
                [
                    'email' => 'user-admin@test.com',
                    'password' => Hash::make($password),
                    'first_name' => 'Admin',
                    'last_name' => 'for test',
                    'phone' => '01111111113',
                    
                ]
            ]

        );

        $user_mar = User::where('id',1)->get()->first();
        $user_tr = User::where('id',2)->get()->first();
        $user_admin = User::where('id',3)->get()->first();

        $user_mar->address()->save($adr);
        $user_tr->address()->save($adr);
        $user_admin->address()->save($adr);

        DB::table('marchents')->insert([
                [
                    'company_name' => null,
                    'address_id' => $adr->id,
                    'user_id' => $user_mar->id
                ]
        ]);

        // insert transporter and admin

        DB::table('employees')->insert([
                [
                    'user_id' => $user_tr->id
                ],
                [
                    'user_id' => $user_admin->id
                ]
        ]);
    }
}

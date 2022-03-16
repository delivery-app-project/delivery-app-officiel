<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // user 
        $user_marchent = User::where([
            'email' => 'user-mar@test.com'
        ])->get()->first();

        $user_transporter = User::where([
            'email' => 'user-tr@test.com'
        ])->get()->first();
        
        $role_marchent = Role::findByName('marchent','web');
        // dd($role_marchent);
        $user_marchent->assignRole($role_marchent->name);

        $role_transporter = Role::findByName('transporter','web');
        // dd($role_transporter);
        $user_transporter->assignRole($role_transporter->name);
    }
}

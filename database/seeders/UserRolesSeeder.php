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

        $user_admin = User::where([
            'email' => 'user-admin@test.com'
        ])->get()->first();

        
        $role_marchent = Role::findByName('marchent','api');
        // dd($role_marchent)
        $user_marchent->assignRole($role_marchent->name);

        $role_transporter = Role::findByName('transporter','api');
        // dd($role_transporter);
        $user_transporter->assignRole($role_transporter->name);


        $role_admin = Role::findByName('admin','api');
        // dd($role_transporter);
        $user_admin->assignRole($role_admin->name);

        // $employeeRoles = config('roles&&permissions.employeeRoles');
        
        
    }
}

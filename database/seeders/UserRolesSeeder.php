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
        $user = User::where([
            'email' => 'user@test.com'
        ])->get()->first();

        $role_marchent = Role::findByName('marchent','web');
        // dd($role_marchent);
        $user->assignRole($role_marchent->name);
    }
}

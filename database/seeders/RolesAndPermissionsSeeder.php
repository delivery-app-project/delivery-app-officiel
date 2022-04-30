<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    


    public function filter_permissions($permissions){
        $all = Permission::all();

        return $all->filter( function ($item) use ($permissions){
                return in_array($item->name,$permissions);
        });
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        

        $permissions = config('roles&&permissions.permissions');
        
        array_filter(
            $permissions,
            function ($item) { Permission::create($item);}
        );
        
        $roles = config('roles&&permissions.roles');
        $permissions_by_roles = config('roles&&permissions.permissions_by_role');

        foreach ($roles as $value) {
            $role = Role::create(
                // [ 'name' => $value]
                $value
            );

            $role->givePermissionTo($this->filter_permissions($permissions_by_roles['all_roles']));
            $role->givePermissionTo($this->filter_permissions($permissions_by_roles[$value['name']]));

        }

        
        
        
    }
}

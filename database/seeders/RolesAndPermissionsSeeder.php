<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    protected $role_permissions = [
        'all_roles' => [
            'view home',
            'view not authorized'
        ],
        'marchent' => [
            'view packages'
        ]
    ];

    // protected $permissions = [
    //     ['name' => 'view home','subject' => 'Home' , 'action' => 'read'],
    //     ['name' => 'view not authorized','subject' => 'Not Authorized' , 'action' => 'read'],
    //     ['name' => 'view pa','subject' => 'Not Authorized' , 'action' => 'read'],
    // ];


    public function filter_permissions($permissions){
        $all = Permission::all();

        return $all->filter( function ($item) use ($permissions){
                return in_array($item->name,$permissions);
        });
    }

    // protected $roles = [
    //     [
    //         'name' => 'marchent'
    //     ]
    // ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
        // DB::table('permissions')->insert(
        //     $this->permissions
        // );
        $permissions = config('roles&&permissions.permissions');
        
        array_filter(
            $permissions,
            function ($item) { Permission::create($item);}
        );
        
        // roles 
        // marchent 
        // $role = Role::create(
        //     [ 'name' => 'marchent']
        // );
        
        // $role->givePermissionTo($this->filter_permissions($this->role_permissions['all_roles']));
        // $role->givePermissionTo($this->filter_permissions($this->role_permissions['marchent']));


        $roles = config('roles&&permissions.roles');
        $permissions_by_roles = config('roles&&permissions.permissions_by_role');

        foreach ($roles as $value) {
            $role = Role::create(
                [ 'name' => $value]
            );

            $role->givePermissionTo($this->filter_permissions($permissions_by_roles['all_roles']));
            $role->givePermissionTo($this->filter_permissions($permissions_by_roles[$value]));

        }
        
        
    }
}

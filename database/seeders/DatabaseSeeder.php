<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // for seeding the types of all models
        $this->call(TypeMorphSeeder::class);

        $this->call(UserDefaultSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(UserRolesSeeder::class);

        // wilaya daira , city 
        $this->call(WilayaDairaCitySeeder::class);
    }
}

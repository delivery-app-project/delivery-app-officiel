<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeMorphSeeder extends Seeder
{

    protected $table = "type_morphs";
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $types = config('default.general.agency.seed');

        DB::table($this->table)->insert($types);
        
    }
}

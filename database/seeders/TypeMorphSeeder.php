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
        $type_stocks = config('default.general.stock.seed');
        
        DB::table($this->table)->insert($types);
        DB::table($this->table)->insert($type_stocks);
        
    }
}

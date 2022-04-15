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
        $type_user_status = config('default.general.user.status.seed');
        $type_marchent_trade_type = config('default.general.marchent.seed.trade_type');
        $type_order_etat = config('default.general.order.seed.etat');
        $type_order_receiver_type = config('default.general.order.seed.receiver_type');
        
        DB::table($this->table)->insert($types);
        DB::table($this->table)->insert($type_stocks);
        DB::table($this->table)->insert($type_user_status);
        DB::table($this->table)->insert($type_marchent_trade_type);
        DB::table($this->table)->insert($type_order_etat);
        DB::table($this->table)->insert($type_order_receiver_type);
        
    }
}

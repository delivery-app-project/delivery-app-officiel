<?php

namespace Database\Seeders;

use App\Entities\City;
use App\Entities\Daira;
use App\Entities\Wilaya;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayaDairaCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $wilayas = config('default.wilayas');

        foreach ($wilayas as $wilaya) {

            $dairas = $wilaya['dairas'];

            $w = Wilaya::create([

                'name' => $wilaya['name']['en'],
                'code_postal' => $wilaya['code_postal'],
                'active' => $wilaya['active']
            ]);

            foreach ($dairas as $daira) {

                $cities = $daira['cities'];

                $d = Daira::create([

                    'name' => $daira['name']['en'],
                    'active' => $daira['active'],
                    'wilaya_id' => $w->id
                ]);

                foreach ($cities as $city) {


                    $c = City::create([
                        'name' => $city['name']['en'],
                        'active' => $city['active'],
                        'daira_id' => $d->id
                    ]);
                }
            }
        }
    }
}

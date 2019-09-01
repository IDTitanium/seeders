<?php

use App\State;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();
        $cities = [
            ['name'=>'Ikeja','state_id'=>State::where('name', 'Lagos')->first()->id],
            ['name'=>'Lekki','state_id'=>State::where('name', 'Lagos')->first()->id],
            ['name'=>'Lagos','state_id'=>State::where('name', 'Lagos')->first()->id],
            ['name'=>'Magodo','state_id'=>State::where('name', 'Lagos')->first()->id]
        ];

        Db::table('cities')->insert($cities);
    }
}

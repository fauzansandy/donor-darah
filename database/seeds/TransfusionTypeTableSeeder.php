<?php

use Illuminate\Database\Seeder;

class TransfusionTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = array([
                'id' => 1,
                'name' => 'PRC'
            ],
            [
                'id' => 2,
                'name' => 'TC'
            ],
            [
                'id' => 3,
                'name' => 'whole blood'
            ],
            [
                'id' => 4,
                'name' => 'PC'
            ],
            [
                'id' => 5,
                'name' => 'FFP'
            ],
            [
                'id' => 6,
                'name' => 'Cryo-AHF'
            ]
        );
        foreach($datas as $data){
            DB::table('transfusion_types')->insert($data);
        }
    }
}

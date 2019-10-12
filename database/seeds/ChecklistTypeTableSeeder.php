<?php

use Illuminate\Database\Seeder;

class ChecklistTypeTableSeeder extends Seeder
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
                'number' => 'A',
                'name' => 'Sebelum pemberian transfusi darah'
            ],
            [
                'id' => 2,
                'number' => 'B',
                'name' => 'Selama pemberian transfusi darah'
            ],
            [
                'id' => 3,
                'number' => 'C',
                'name' => 'Setelah pemberian transfusi darah'
            ]
        );
        foreach($datas as $data){
            DB::table('checklist_types')->insert($data);
        }
    }
}

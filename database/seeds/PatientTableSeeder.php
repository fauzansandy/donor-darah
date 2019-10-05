<?php

use Illuminate\Database\Seeder;

class PatientTableSeeder extends Seeder
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
                'name' => 'Master Pasien',
                'no_rm' => '[Master]'
            ]
        );
        foreach($datas as $data){
            DB::table('patient')->insert($data);
        }
    }
}

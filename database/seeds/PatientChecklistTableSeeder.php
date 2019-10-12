<?php

use Illuminate\Database\Seeder;

class PatientChecklistTableSeeder extends Seeder
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
                'patient_id' => '1',
                'checklist_id' => '1',
                'is_checked' => '0'
            ],
            [
                'id' => 2,
                'patient_id' => '1',
                'checklist_id' => '2',
                'is_checked' => '0'
            ],
            [
                'id' => 3,
                'patient_id' => '1',
                'checklist_id' => '3',
                'is_checked' => '0'
            ],
            [
                'id' => 4,
                'patient_id' => '1',
                'checklist_id' => '4',
                'is_checked' => '0'
            ],
            [
                'id' => 5,
                'patient_id' => '1',
                'checklist_id' => '5',
                'is_checked' => '0'
            ],
            [
                'id' => 6,
                'patient_id' => '1',
                'checklist_id' => '6',
                'is_checked' => '0'
            ],
            [
                'id' => 7,
                'patient_id' => '1',
                'checklist_id' => '7',
                'is_checked' => '0'
            ],
            [
                'id' => 8,
                'patient_id' => '1',
                'checklist_id' => '8',
                'is_checked' => '0'
            ],
            [
                'id' => 9,
                'patient_id' => '1',
                'checklist_id' => '9',
                'is_checked' => '0'
            ],
            [
                'id' => 10,
                'patient_id' => '1',
                'checklist_id' => '10',
                'is_checked' => '0'
            ],
            [
                'id' => 11,
                'patient_id' => '1',
                'checklist_id' => '11',
                'is_checked' => '0'
            ],
            [
                'id' => 12,
                'patient_id' => '1',
                'checklist_id' => '12',
                'is_checked' => '0'
            ],
            [
                'id' => 13,
                'patient_id' => '1',
                'checklist_id' => '13',
                'is_checked' => '0'
            ],
            [
                'id' => 14,
                'patient_id' => '1',
                'checklist_id' => '14',
                'is_checked' => '0'
            ],
            [
                'id' => 15,
                'patient_id' => '1',
                'checklist_id' => '15',
                'is_checked' => '0'
            ],
            [
                'id' => 16,
                'patient_id' => '1',
                'checklist_id' => '16',
                'is_checked' => '0'
            ],
            [
                'id' => 17,
                'patient_id' => '1',
                'checklist_id' => '17',
                'is_checked' => '0'
            ],
            [
                'id' => 18,
                'patient_id' => '1',
                'checklist_id' => '18',
                'is_checked' => '0'
            ],
            [
                'id' => 19,
                'patient_id' => '1',
                'checklist_id' => '19',
                'is_checked' => '0'
            ],
            [
                'id' => 20,
                'patient_id' => '1',
                'checklist_id' => '20',
                'is_checked' => '0'
            ],
            [
                'id' => 21,
                'patient_id' => '1',
                'checklist_id' => '21',
                'is_checked' => '0'
            ],
        );
        foreach($datas as $data){
            DB::table('patient_checklists')->insert($data);
        }
    }
}

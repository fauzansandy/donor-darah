<?php

use Illuminate\Database\Seeder;

class ChecklistTableSeeder extends Seeder
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
                'checklist_type_id' => '1',
                'number' => '1',
                'name' => 'Pasien sudah menggunakan gelang identitas'
            ],
            [
                'id' => 2,
                'checklist_type_id' => '1',
                'number' => '2',
                'name' => 'Pastikan informed consent sudah diisi'
            ],
            [
                'id' => 3,
                'checklist_type_id' => '1',
                'number' => '3',
                'name' => 'Pasien dan keluarga sudah diberikan penjelasan tentang prosedur transfusi, reaksi transfusi yang mungkin terjadi, dan segera melaporkan kepada perawat'
            ],
            [
                'id' => 4,
                'checklist_type_id' => '1',
                'number' => '4',
                'name' => 'Kaji keadaan pasien seperti adanya demam atau kemerahan yang dapat membuat rancu dengan reaksi transfusi'
            ],
            [
                'id' => 5,
                'checklist_type_id' => '1',
                'number' => '5',
                'name' => 'Pastikan akses vena baik dan lancar'
            ],
            [
                'id' => 6,
                'checklist_type_id' => '1',
                'number' => '6',
                'name' => 'Pastikan blanko permintaan darah sesuai'
            ],
            [
                'id' => 7,
                'checklist_type_id' => '1',
                'number' => '7',
                'name' => 'Pastikan adanya premedikasi yang telah diresepkan'
            ],
            [
                'id' => 8,
                'checklist_type_id' => '1',
                'number' => '8',
                'name' => 'Cek identitas pasien dengan produk darah dan blanko pengambilan darah
- Cek identitas pasien : nama, tempat tanggal lahir, nomor rekam medik
- Cek produk darah : jenis produk darah, golongan darah, nomor seri kantong darah, tanggal dan waktu kadaluarsa'
            ],
            [
                'id' => 9,
                'checklist_type_id' => '1',
                'number' => '9',
                'name' => 'Cek kembali (double check) dengan petugas lain. Cocokkan produk darah dengan identitas pasien, jenis transfusi, nomor rekam medik, dan nomor seri kantong darah'
            ],
            [
                'id' => 10,
                'checklist_type_id' => '1',
                'number' => '10',
                'name' => 'Mengukur tanda-tanda vital 30 menit sebelum transfusi masuk'
            ],
            [
                'id' => 11,
                'checklist_type_id' => '2',
                'number' => '1',
                'name' => 'Pastikan menggunakan cairan NaCl 0,9% sebelum transfusi masuk'
            ],
            [
                'id' => 12,
                'checklist_type_id' => '2',
                'number' => '2',
                'name' => 'Masukkan premedikasi sesuai peresepan'
            ],
            [
                'id' => 13,
                'checklist_type_id' => '2',
                'number' => '3',
                'name' => 'Melakukan pengukuran tanda-tanda vital dan mengawasi kondisi pasien saat transfusi masuk'
            ],
            [
                'id' => 14,
                'checklist_type_id' => '2',
                'number' => '4',
                'name' => 'Edukasi pasien dan keluarga untuk melaporkan jika ada tanda-tanda reaksi transfusi'
            ],
            [
                'id' => 15,
                'checklist_type_id' => '2',
                'number' => '5',
                'name' => 'Setelah 15 menit, cek tanda-tanda vital'
            ],
            [
                'id' => 16,
                'checklist_type_id' => '2',
                'number' => '6',
                'name' => 'Lakukan monitoring tanda-tanda vital setiap jam selama transfusi berlangsung'
            ],
            [
                'id' => 17,
                'checklist_type_id' => '2',
                'number' => '7',
                'name' => 'Amati adanya: menggigil/hipotermi, hipertermi, kulit kemerahan/urtikaria, takikardi, kesadadarn menurun, dan distres pernafasan'
            ],
            [
                'id' => 18,
                'checklist_type_id' => '3',
                'number' => '1',
                'name' => 'Ukur tanda vital segera saat transfusi selesai'
            ],
            [
                'id' => 19,
                'checklist_type_id' => '3',
                'number' => '2',
                'name' => 'Ukur tanda vital 4 jam setelah transfusi'
            ],
            [
                'id' => 20,
                'checklist_type_id' => '3',
                'number' => '3',
                'name' => 'Dokumentasika pada form monitoring transfusi, lembar catatan terintegrasi'
            ],
            [
                'id' => 21,
                'checklist_type_id' => '3',
                'number' => '4',
                'name' => 'Segera laporkan jika ada reaksi transfusi terjadi ke Bank Darah Rumah Sakit'
            ],
        );
        foreach($datas as $data){
            DB::table('checklists')->insert($data);
        }
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTransfusionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_transfusions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_id')->nullable()->default(NULL);
            $table->integer('transfusion_type_id')->nullable()->default(NULL);

            $table->string('b30m_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('b30m_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('b30m_td',50)->nullable()->default(NULL);
            $table->string('b30m_nadi',50)->nullable()->default(NULL);
            $table->string('b30m_suhu',50)->nullable()->default(NULL);
            $table->string('b30m_respirasi',50)->nullable()->default(NULL);
            $table->string('b30m_jml_cairan_masuk',50)->nullable()->default(NULL);
            $table->string('b30m_jml_cairan_keluar',50)->nullable()->default(NULL);
            $table->string('b30m_ada_reaksi',50)->nullable()->default(NULL);
            $table->string('b30m_tidak_ada_reaksi',50)->nullable()->default(NULL);

            $table->string('0_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('0_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('0_td',50)->nullable()->default(NULL);
            $table->string('0_nadi',50)->nullable()->default(NULL);
            $table->string('0_suhu',50)->nullable()->default(NULL);
            $table->string('0_respirasi',50)->nullable()->default(NULL);
            $table->string('0_jml_cairan_masuk',50)->nullable()->default(NULL);
            $table->string('0_jml_cairan_keluar',50)->nullable()->default(NULL);
            $table->string('0_ada_reaksi',50)->nullable()->default(NULL);
            $table->string('0_tidak_ada_reaksi',50)->nullable()->default(NULL);

            $table->string('a15m_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('a15m_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('a15m_td',50)->nullable()->default(NULL);
            $table->string('a15m_nadi',50)->nullable()->default(NULL);
            $table->string('a15m_suhu',50)->nullable()->default(NULL);
            $table->string('a15m_respirasi',50)->nullable()->default(NULL);
            $table->string('a15m_jml_cairan_masuk',50)->nullable()->default(NULL);
            $table->string('a15m_jml_cairan_keluar',50)->nullable()->default(NULL);
            $table->string('a15m_ada_reaksi',50)->nullable()->default(NULL);
            $table->string('a15m_tidak_ada_reaksi',50)->nullable()->default(NULL);

            $table->string('a1h_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('a1h_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('a1h_td',50)->nullable()->default(NULL);
            $table->string('a1h_nadi',50)->nullable()->default(NULL);
            $table->string('a1h_suhu',50)->nullable()->default(NULL);
            $table->string('a1h_respirasi',50)->nullable()->default(NULL);
            $table->string('a1h_jml_cairan_masuk',50)->nullable()->default(NULL);
            $table->string('a1h_jml_cairan_keluar',50)->nullable()->default(NULL);
            $table->string('a1h_ada_reaksi',50)->nullable()->default(NULL);
            $table->string('a1h_tidak_ada_reaksi',50)->nullable()->default(NULL);

            $table->string('a2h_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('a2h_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('a2h_td',50)->nullable()->default(NULL);
            $table->string('a2h_nadi',50)->nullable()->default(NULL);
            $table->string('a2h_suhu',50)->nullable()->default(NULL);
            $table->string('a2h_respirasi',50)->nullable()->default(NULL);
            $table->string('a2h_jml_cairan_masuk',50)->nullable()->default(NULL);
            $table->string('a2h_jml_cairan_keluar',50)->nullable()->default(NULL);
            $table->string('a2h_ada_reaksi',50)->nullable()->default(NULL);
            $table->string('a2h_tidak_ada_reaksi',50)->nullable()->default(NULL);

            $table->string('a3h_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('a3h_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('a3h_td',50)->nullable()->default(NULL);
            $table->string('a3h_nadi',50)->nullable()->default(NULL);
            $table->string('a3h_suhu',50)->nullable()->default(NULL);
            $table->string('a3h_respirasi',50)->nullable()->default(NULL);
            $table->string('a3h_jml_cairan_masuk',50)->nullable()->default(NULL);
            $table->string('a3h_jml_cairan_keluar',50)->nullable()->default(NULL);
            $table->string('a3h_ada_reaksi',50)->nullable()->default(NULL);
            $table->string('a3h_tidak_ada_reaksi',50)->nullable()->default(NULL);

            $table->string('a4h_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('a4h_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('a4h_td',50)->nullable()->default(NULL);
            $table->string('a4h_nadi',50)->nullable()->default(NULL);
            $table->string('a4h_suhu',50)->nullable()->default(NULL);
            $table->string('a4h_respirasi',50)->nullable()->default(NULL);
            $table->string('a4h_jml_cairan_masuk',50)->nullable()->default(NULL);
            $table->string('a4h_jml_cairan_keluar',50)->nullable()->default(NULL);
            $table->string('a4h_ada_reaksi',50)->nullable()->default(NULL);
            $table->string('a4h_tidak_ada_reaksi',50)->nullable()->default(NULL);

            $table->string('d_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('d_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('d_td',50)->nullable()->default(NULL);
            $table->string('d_nadi',50)->nullable()->default(NULL);
            $table->string('d_suhu',50)->nullable()->default(NULL);
            $table->string('d_respirasi',50)->nullable()->default(NULL);
            $table->string('d_jml_cairan_masuk',50)->nullable()->default(NULL);
            $table->string('d_jml_cairan_keluar',50)->nullable()->default(NULL);
            $table->string('d_ada_reaksi',50)->nullable()->default(NULL);
            $table->string('d_tidak_ada_reaksi',50)->nullable()->default(NULL);

            $table->string('4pt_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('4pt_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('4pt_td',50)->nullable()->default(NULL);
            $table->string('4pt_nadi',50)->nullable()->default(NULL);
            $table->string('4pt_suhu',50)->nullable()->default(NULL);
            $table->string('4pt_respirasi',50)->nullable()->default(NULL);
            $table->string('4pt_jml_cairan_masuk',50)->nullable()->default(NULL);
            $table->string('4pt_jml_cairan_keluar',50)->nullable()->default(NULL);
            $table->string('4pt_ada_reaksi',50)->nullable()->default(NULL);
            $table->string('4pt_tidak_ada_reaksi',50)->nullable()->default(NULL);

            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_transfusions');
    }
}

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
            $table->string('b30m_td',10)->nullable()->default(NULL);
            $table->string('b30m_nadi',10)->nullable()->default(NULL);
            $table->string('b30m_suhu',10)->nullable()->default(NULL);
            $table->string('b30m_respirasi',10)->nullable()->default(NULL);
            $table->string('b30m_jml_cairan_masuk',10)->nullable()->default(NULL);
            $table->string('b30m_jml_cairan_keluar',10)->nullable()->default(NULL);
            $table->string('b30m_ada_reaksi',10)->nullable()->default(NULL);
            $table->string('b30m_tidak_ada_reaksi',10)->nullable()->default(NULL);

            $table->string('tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('jam_pemberian',50)->nullable()->default(NULL);
            $table->string('td',10)->nullable()->default(NULL);
            $table->string('nadi',10)->nullable()->default(NULL);
            $table->string('suhu',10)->nullable()->default(NULL);
            $table->string('respirasi',10)->nullable()->default(NULL);
            $table->string('jml_cairan_masuk',10)->nullable()->default(NULL);
            $table->string('jml_cairan_keluar',10)->nullable()->default(NULL);
            $table->string('ada_reaksi',10)->nullable()->default(NULL);
            $table->string('tidak_ada_reaksi',10)->nullable()->default(NULL);

            $table->string('a15m_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('a15m_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('a15m_td',10)->nullable()->default(NULL);
            $table->string('a15m_nadi',10)->nullable()->default(NULL);
            $table->string('a15m_suhu',10)->nullable()->default(NULL);
            $table->string('a15m_respirasi',10)->nullable()->default(NULL);
            $table->string('a15m_jml_cairan_masuk',10)->nullable()->default(NULL);
            $table->string('a15m_jml_cairan_keluar',10)->nullable()->default(NULL);
            $table->string('a15m_ada_reaksi',10)->nullable()->default(NULL);
            $table->string('a15m_tidak_ada_reaksi',10)->nullable()->default(NULL);

            $table->string('a1h_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('a1h_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('a1h_td',10)->nullable()->default(NULL);
            $table->string('a1h_nadi',10)->nullable()->default(NULL);
            $table->string('a1h_suhu',10)->nullable()->default(NULL);
            $table->string('a1h_respirasi',10)->nullable()->default(NULL);
            $table->string('a1h_jml_cairan_masuk',10)->nullable()->default(NULL);
            $table->string('a1h_jml_cairan_keluar',10)->nullable()->default(NULL);
            $table->string('a1h_ada_reaksi',10)->nullable()->default(NULL);
            $table->string('a1h_tidak_ada_reaksi',10)->nullable()->default(NULL);

            $table->string('a2h_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('a2h_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('a2h_td',10)->nullable()->default(NULL);
            $table->string('a2h_nadi',10)->nullable()->default(NULL);
            $table->string('a2h_suhu',10)->nullable()->default(NULL);
            $table->string('a2h_respirasi',10)->nullable()->default(NULL);
            $table->string('a2h_jml_cairan_masuk',10)->nullable()->default(NULL);
            $table->string('a2h_jml_cairan_keluar',10)->nullable()->default(NULL);
            $table->string('a2h_ada_reaksi',10)->nullable()->default(NULL);
            $table->string('a2h_tidak_ada_reaksi',10)->nullable()->default(NULL);

            $table->string('a3h_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('a3h_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('a3h_td',10)->nullable()->default(NULL);
            $table->string('a3h_nadi',10)->nullable()->default(NULL);
            $table->string('a3h_suhu',10)->nullable()->default(NULL);
            $table->string('a3h_respirasi',10)->nullable()->default(NULL);
            $table->string('a3h_jml_cairan_masuk',10)->nullable()->default(NULL);
            $table->string('a3h_jml_cairan_keluar',10)->nullable()->default(NULL);
            $table->string('a3h_ada_reaksi',10)->nullable()->default(NULL);
            $table->string('a3h_tidak_ada_reaksi',10)->nullable()->default(NULL);

            $table->string('a4h_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('a4h_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('a4h_td',10)->nullable()->default(NULL);
            $table->string('a4h_nadi',10)->nullable()->default(NULL);
            $table->string('a4h_suhu',10)->nullable()->default(NULL);
            $table->string('a4h_respirasi',10)->nullable()->default(NULL);
            $table->string('a4h_jml_cairan_masuk',10)->nullable()->default(NULL);
            $table->string('a4h_jml_cairan_keluar',10)->nullable()->default(NULL);
            $table->string('a4h_ada_reaksi',10)->nullable()->default(NULL);
            $table->string('a4h_tidak_ada_reaksi',10)->nullable()->default(NULL);

            $table->string('d_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('d_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('d_td',10)->nullable()->default(NULL);
            $table->string('d_nadi',10)->nullable()->default(NULL);
            $table->string('d_suhu',10)->nullable()->default(NULL);
            $table->string('d_respirasi',10)->nullable()->default(NULL);
            $table->string('d_jml_cairan_masuk',10)->nullable()->default(NULL);
            $table->string('d_jml_cairan_keluar',10)->nullable()->default(NULL);
            $table->string('d_ada_reaksi',10)->nullable()->default(NULL);
            $table->string('d_tidak_ada_reaksi',10)->nullable()->default(NULL);

            $table->string('pt4_tgl_pemberian',50)->nullable()->default(NULL);
            $table->string('pt4_jam_pemberian',50)->nullable()->default(NULL);
            $table->string('pt4_td',10)->nullable()->default(NULL);
            $table->string('pt4_nadi',10)->nullable()->default(NULL);
            $table->string('pt4_suhu',10)->nullable()->default(NULL);
            $table->string('pt4_respirasi',10)->nullable()->default(NULL);
            $table->string('pt4_jml_cairan_masuk',10)->nullable()->default(NULL);
            $table->string('pt4_jml_cairan_keluar',10)->nullable()->default(NULL);
            $table->string('pt4_ada_reaksi',10)->nullable()->default(NULL);
            $table->string('pt4_tidak_ada_reaksi',10)->nullable()->default(NULL);

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

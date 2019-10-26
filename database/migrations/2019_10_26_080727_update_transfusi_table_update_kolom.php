<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTransfusiTableUpdateKolom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_transfusions', function (Blueprint $table) {
            $table->string('b30m_tanda_tangan',30)->nullable()->default(NULL);
            $table->string('tanda_tangan',30)->nullable()->default(NULL);
            $table->string('a15m_tanda_tangan',30)->nullable()->default(NULL);
            $table->string('a1h_tanda_tangan',30)->nullable()->default(NULL);
            $table->string('a2h_tanda_tangan',30)->nullable()->default(NULL);
            $table->string('a3h_tanda_tangan',30)->nullable()->default(NULL);
            $table->string('a4h_tanda_tangan',30)->nullable()->default(NULL);
            $table->string('d_tanda_tangan',30)->nullable()->default(NULL);
            $table->string('pt4_tanda_tangan',30)->nullable()->default(NULL);

            $table->string('dokter',30)->nullable()->default(NULL);
            $table->string('diagnosis',30)->nullable()->default(NULL);
            $table->string('ruang',20)->nullable()->default(NULL);
            $table->string('colf',10)->nullable()->default(NULL);
            $table->string('no_batch',30)->nullable()->default(NULL);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

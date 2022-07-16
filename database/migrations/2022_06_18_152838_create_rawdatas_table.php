<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawdatas', function (Blueprint $table) {
            $table->string('Tgl OBC');
            $table->string('Material');
            $table->string('nopo');
            $table->string('OBC');
            $table->string('SERI');
            $table->string('warna');
            $table->string('hje');
            $table->string('RPB');
            $table->string('BPB');
            $table->string('kodepb');
            $table->string('JHT');
            $table->string('qtypesan');
            $table->string('RENCET');
            $table->string('Tgl Jatuh Tempo');
            $table->string('Personalisasi');
            $table->string('Perekat');
            $table->integer('GR');
            $table->string('No Pelat');
            $table->string('type');
            $table->timestamp('tanggal_laporan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rawdatas');
    }
};

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
        Schema::create('detail_laporans', function (Blueprint $table) {
            $table->string('laporan_id');
            $table->foreign('laporan_id')->references('id')->on('laporans');
            $table->string('nopo');
            $table->string('OBC');
            $table->string('SERI');
            $table->string('Personalisasi');
            $table->string('GR');
            $table->timestamp('tanggal_laporan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_laporans');
    }
};

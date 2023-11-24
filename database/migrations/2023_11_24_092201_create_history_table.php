<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('music_id');
            $table->bigInteger('user_id');
            $table->dateTime('played_at')->nullable();
            $table->string('played_day')->nullable();
            // $table->string('played_hari')->nullable();
            // $table->string('played_tanggal')->nullable();
            // $table->string('played_bulan')->nullable();
            // $table->string('played_tahun')->nullable();
            // $table->time('played_waktu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history');
    }
};

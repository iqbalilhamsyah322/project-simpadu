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
        Schema::create('databios', function (Blueprint $table) {
            $table->id();
            $table->string('jumlah_sd');
            $table->string('jumlah_smp');
            $table->string('jumlah_sma');
            $table->string('jumlah_kuliah');
            $table->string('pdam');
            $table->string('pln');
            $table->string('rumah');
            $table->string('daya_pln');
            $table->string('beasiswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('databios');
    }
};

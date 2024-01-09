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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ktp');
            $table->string('tanggal');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('pendapatan');
            $table->string('penghasilan');
            $table->string('status');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('provinsi');
            $table->string('kab');
            $table->string('kec');
            $table->string('kel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};

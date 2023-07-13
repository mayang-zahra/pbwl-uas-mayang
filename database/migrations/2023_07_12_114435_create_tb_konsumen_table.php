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
        Schema::create('tb_konsumen', function (Blueprint $table) {
            $table->increments('konsumen_id');
            $table->string('konsumen_nama_konsumen');
            $table->string('konsumen_alamat');
            $table->string('konsumen_no_tlpn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_konsumen');
    }
};

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
        Schema::create('penghuni_univ', function (Blueprint $table) {
            $table->unsignedBigInteger('penghuni_id');
            $table->unsignedBigInteger('univ_id');
            $table->foreign('penghuni_id')->references('id')->on('penghuni')->onDelete('cascade');
            $table->foreign('univ_id')->references('id')->on('univ')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penghuni_univ');
    }
};

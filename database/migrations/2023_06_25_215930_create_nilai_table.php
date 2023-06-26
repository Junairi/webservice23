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
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->integer('mahasiswa_id');
            $table->integer('matakuliah_id');
            $table->decimal('nilai_harian', 3, 2);
            $table->decimal('nilai_uts', 3, 2);
            $table->decimal('nilai_akhir', 3, 1);
            $table->char('grade', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};

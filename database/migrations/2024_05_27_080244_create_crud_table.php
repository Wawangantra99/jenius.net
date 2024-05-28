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
        Schema::create('crud', function (Blueprint $table) {
            $table->id();
            $table->string('kalimat');
            $table->string('pengarang');
            $table->enum('status', ['0', '1'])->default('1');
            $table->string('gambar');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crud');
    }
};

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
        Schema::create('desrada_ismail', function (Blueprint $table) {
            $table->id();
            $table->string("nim")->nullable(false);
            $table->string("nama")->nullable(false);
            $table->string("kelas")->nullable(false);
            $table->string("jenis_kelamin")->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desrada_ismail');
    }
};

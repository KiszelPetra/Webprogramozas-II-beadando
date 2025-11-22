<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kapcsolat', function (Blueprint $table) {
            $table->id();
            $table->string('nev', 100);
            $table->text('uzenet');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kapcsolat');
    }
};

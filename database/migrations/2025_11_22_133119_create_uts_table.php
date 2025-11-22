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
     Schema::connection('tanosveny')->create('ut', function (Blueprint $table) {
        $table->id();
        $table->string('nev');
        $table->float('hossz');
        $table->integer('allomas');
        $table->float('ido');
        $table->boolean('vezetes');
        $table->foreignId('telepulesid')->constrained('telepules');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ut');
    }
};

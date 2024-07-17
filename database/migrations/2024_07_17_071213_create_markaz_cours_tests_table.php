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
        Schema::create('markaz_cours_tests', function (Blueprint $table) {
            $table->id();
            $table->integer('markaz_id')->constrained();
            $table->integer('cours_id')->constrained();
            $table->string('test_savol');
            $table->string('test_javob_true');
            $table->string('test_javon_false1');
            $table->string('test_javon_false2');
            $table->string('test_javon_false3');
            $table->string('meneger');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('markaz_cours_tests');
    }
};

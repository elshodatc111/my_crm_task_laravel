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
        Schema::create('grops', function (Blueprint $table) {
            $table->id();
            $table->integer('markaz_id')->constrained();
            $table->integer('tulov_id')->constrained();
            $table->integer('room_id')->constrained();
            $table->integer('cours_id')->constrained();
            $table->integer('techer_id')->constrained();
            $table->string('guruh_name');
            $table->string('guruh_start');
            $table->string('guruh_end');
            $table->string('hafta_kun');
            $table->string('dars_count');
            $table->string('techer_foiz');
            $table->string('techer_paymart');
            $table->string('techer_bonus');
            $table->string('dars_time');
            $table->string('next_id')->default('Null');
            $table->string('meneger');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grops');
    }
};

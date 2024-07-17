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
        Schema::create('markaz_cours', function (Blueprint $table) {
            $table->id();
            $table->integer('markaz_id')->constrained();
            $table->string('cours_name');
            $table->string('meneger');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('markaz_cours');
    }
};

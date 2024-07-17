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
        Schema::create('markaz_cours_videos', function (Blueprint $table) {
            $table->id();
            $table->integer('markaz_id')->constrained();
            $table->integer('cours_id')->constrained();
            $table->string('cours_title');
            $table->string('cours_url_token');
            $table->integer('cours_number');
            $table->string('meneger');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('markaz_cours_videos');
    }
};

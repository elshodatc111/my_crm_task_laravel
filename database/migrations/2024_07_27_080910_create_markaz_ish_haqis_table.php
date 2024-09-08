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
        Schema::create('markaz_ish_haqis', function (Blueprint $table) {
            $table->id();            
            $table->integer('markaz_id')->constrained();
            $table->integer('user_id')->constrained();
            $table->string('typing');
            $table->string('summa');
            $table->string('type');
            $table->string('guruh');
            $table->string('guruh_name');
            $table->string('comment');
            $table->string('meneger');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('markaz_ish_haqis');
    }
};

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
        Schema::create('user_eslatmas', function (Blueprint $table) {
            $table->id();
            $table->integer('markaz_id')->constrained();
            $table->integer('user_id')->constrained();
            $table->string('comment');
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
        Schema::dropIfExists('user_eslatmas');
    }
};

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
        Schema::create('user_balans', function (Blueprint $table) {
            $table->id();
            $table->integer('markaz_id')->constrained();
            $table->integer('user_id')->constrained();
            $table->integer('naqt');
            $table->integer('plastik');
            $table->integer('payme');
            $table->integer('qaytarildi');
            $table->integer('chegirma');
            $table->integer('jarima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_balans');
    }
};

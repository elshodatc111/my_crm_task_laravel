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
        Schema::create('kassa_kirim_chiqims', function (Blueprint $table) {
            $table->id();
            $table->integer('markaz_id')->constrained();
            $table->string('hodisa');
            $table->string('summa');
            $table->string('type');
            $table->string('status');
            $table->string('comment');
            $table->string('meneger');
            $table->string('administrator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kassa_kirim_chiqims');
    }
};

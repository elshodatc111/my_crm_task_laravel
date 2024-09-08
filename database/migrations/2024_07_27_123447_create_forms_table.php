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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->integer('markaz_id');
            $table->string('type');
            $table->string('smm');
            $table->string('name');
            $table->string('tkun');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('addres');
            $table->string('about');
            $table->string('status')->default('true');
            $table->string('user_id')->nullable();
            $table->string('meneger')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};

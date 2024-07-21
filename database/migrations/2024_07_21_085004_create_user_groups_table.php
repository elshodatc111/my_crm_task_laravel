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
        Schema::create('user_groups', function (Blueprint $table) {
            $table->id();
            $table->integer('markaz_id')->constrained();
            $table->integer('user_id')->constrained();
            $table->integer('grops_id')->constrained();
            $table->string('grops_start_data');
            $table->string('grops_start_comment');
            $table->string('grops_start_meneger');
            $table->string('grops_end_data')->default('...');
            $table->string('grops_end_comment')->default('...');
            $table->string('grops_end_meneger')->default('...');
            $table->string('jarima')->default('...');
            $table->string('status')->default('true');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_groups');
    }
};

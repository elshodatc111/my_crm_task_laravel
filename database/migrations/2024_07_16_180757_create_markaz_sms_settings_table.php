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
        Schema::create('markaz_sms_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('markaz_id')->constrained();
            $table->string('new_user')->default('false');
            $table->string('tkun')->default('false');
            $table->string('new_pay')->default('false');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('markaz_sms_settings');
    }
};

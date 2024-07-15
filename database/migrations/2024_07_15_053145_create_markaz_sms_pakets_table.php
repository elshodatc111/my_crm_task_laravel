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
        Schema::create('markaz_sms_pakets', function (Blueprint $table) {
            $table->id();
            $table->integer('markaz_id')->default(1)->constrained();
            $table->integer('paket_soni');
            $table->string('description');
            $table->string('meneger');
            $table->string('tulov');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('markaz_sms_pakets');
    }
};

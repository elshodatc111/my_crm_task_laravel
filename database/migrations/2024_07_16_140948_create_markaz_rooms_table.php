<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('markaz_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('markaz_id')->constrained();
            $table->string('room_name');
            $table->string('status');
            $table->string('meneger');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('markaz_rooms');
    }
};

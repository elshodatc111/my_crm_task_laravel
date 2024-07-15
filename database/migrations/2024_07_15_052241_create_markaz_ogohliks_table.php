<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('markaz_ogohliks', function (Blueprint $table) {
            $table->id();
            $table->integer('markaz_id')->default(1)->constrained();
            $table->string('data');
            $table->string('description');
            $table->string('meneger');
            $table->string('status')->default('true');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('markaz_ogohliks');
    }
};

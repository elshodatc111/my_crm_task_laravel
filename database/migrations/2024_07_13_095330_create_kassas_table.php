<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kassas', function (Blueprint $table) {
            $table->id();
            $table->integer('markaz_id')->default(1)->constrained();
            $table->integer('kassa_naqt')->default(0);
            $table->integer('kassa_naqt_chiqim_pedding')->default(0);
            $table->integer('kassa_naqt_xarajat_pedding')->default(0);
            $table->integer('kassa_naqt_ish_haqi_pedding')->default(0);
            $table->integer('kassa_plastik')->default(0);
            $table->integer('kassa_plastik_chiqim_pedding')->default(0);
            $table->integer('kassa_plastik_xarajat_pedding')->default(0);
            $table->integer('kassa_plastik_ish_haqi_pedding')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kassas');
    }
};

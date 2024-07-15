<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('markaz_balans', function (Blueprint $table) {
            $table->id();
            $table->integer('markaz_id')->default(1)->constrained();
            $table->integer('balans_naqt')->default(0);
            $table->integer('balans_naqt_chiqim')->default(0);
            $table->integer('kassa_naqt_xarajat')->default(0);
            $table->integer('balans_plastik')->default(0);
            $table->integer('balans_plastik_chiqim')->default(0);
            $table->integer('kassa_plastik_xarajat')->default(0);
            $table->integer('balans_payme')->default(0);
            $table->integer('balans_payme_chiqim')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('markaz_balans');
    }
};

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
        Schema::create('markazs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('drektor');
            $table->string('phone');
            $table->string('addres');
            $table->string('payme_id');
            $table->string('status')->default('true');
            $table->string('image');
            $table->integer('count_sms')->default(0);
            $table->integer('mavjud_sms')->default(0);
            $table->integer('lessen_time')->default(90);
            $table->integer('paymart')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('markazs');
    }
};

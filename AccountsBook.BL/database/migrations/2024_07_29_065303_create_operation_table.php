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
        Schema::create('operation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('category_id');
            $table->decimal('amount', 10, 2);
            $table->string('description', 255);
            $table->date('date'); // No puedo ingresar por defecto la fecha actual así que lo haré a nivel de modelo o controlador

            $table->timestamps();

            // Foreing Keys
            $table->foreign('account_id')->references('id')->on('account')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operation');
    }
};

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
        Schema::create('transfer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('source_account');
            $table->unsignedBigInteger('destination_account');
            $table->decimal('amount', 10, 2);
            $table->date('date'); // No puedo ingresar por defecto la fecha actual así que lo haré a nivel de modelo o controlador

            $table->timestamps();

            // Foreign Keys
            $table->foreign('source_account')->references('id')->on('account')->onDelete('cascade');
            $table->foreign('destination_account')->references('id')->on('account')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfer');
    }
};

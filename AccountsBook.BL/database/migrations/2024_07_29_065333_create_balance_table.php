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
        Schema::create('balance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('abook_id');
            $table->decimal('initial_amount', 10, 2)->default(0.00);
            $table->decimal('expenses', 10, 2)->default(0.00);
            $table->decimal('income', 10, 2)->default(0.00);

            $table->timestamps();

            // Foreing key
            $table->foreign('abook_id')->references('id')->on('accounts_book')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balance');
    }
};

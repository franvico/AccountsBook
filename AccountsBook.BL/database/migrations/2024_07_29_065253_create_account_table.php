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
        Schema::create('account', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('abook_id');
            $table->string('name', 50);
            $table->decimal('amount', 10, 2)->default(0.00);
            $table->boolean('main')->default(false);

            $table->timestamps();

            // Unique constraint
            $table->unique(['abook_id', 'name']);

            // Foreign Keys
            $table->foreign('abook_id')->references('id')->on('accounts_book')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account');
    }
};

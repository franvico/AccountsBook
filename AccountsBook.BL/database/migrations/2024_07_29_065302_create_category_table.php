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
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('abook_id');
            $table->string('name', 100);
            $table->text('description');

            $table->timestamps();

            // Unique contraint
            $table->unique(['abook_id', 'name']);

            // Foreign keys
            // $table->foreign('abook_id')->references('id')->on('accounts_book')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};

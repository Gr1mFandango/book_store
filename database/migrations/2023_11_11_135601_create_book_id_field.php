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
        Schema::table('images', function (Blueprint $table) {
            $table->unsignedInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books');
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->unsignedInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('book_id');
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->dropColumn('book_id');
        });
    }
};

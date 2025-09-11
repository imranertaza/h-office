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
        Schema::create('portfolio_category_map', function (Blueprint $table) {
            $table->foreignId('portfolio_id')->constrained('portfolio')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('')->onDelete('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

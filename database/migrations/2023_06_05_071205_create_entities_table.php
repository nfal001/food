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
        Schema::create('entities', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('name');
            $table->unsignedBigInteger('price');
            // $table->
            $table->foreignId('city_id')->nullable();
            $table->foreignId('district_id')->nullable();
            $table->enum('entity_status',['Draft','Out Of Stock','Ready'])->default('Draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entities');
    }
};
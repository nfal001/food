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
        Schema::table('districts', function (Blueprint $table) {
            $table->foreignId('city_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('province_id'); // ?
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('districts', function (Blueprint $table) {
            $table->dropConstrainedForeignId('city_id');
            // $table->foreignId('province_id'); // ?
        });
    }
};

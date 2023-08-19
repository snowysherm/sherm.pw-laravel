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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->boolean('brontes_wings')->default(0);
            $table->boolean('helix_hyperpod')->default(0);
            $table->boolean('titan_6')->default(0);
            $table->boolean('bantam_dxun_reaper')->default(0);
            $table->boolean('rancor')->default(0);
            $table->boolean('dragon_wings')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};

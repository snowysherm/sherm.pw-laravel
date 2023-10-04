<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('clocks', function(Blueprint $table) {
            $table->id();
            $table->dateTime('date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clocks');
    }
};

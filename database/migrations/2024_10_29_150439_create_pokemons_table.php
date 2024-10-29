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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('category')->nullable(false);
            $table->string('type')->nullable(false);
            $table->string('ability')->nullable(false);
            $table->tinyInteger('stage_of_evolution')->unsigned()->nullable(false);
            $table->float('height', 6, 2, true);
            $table->float('weight', 6, 2, true);
            $table->string('image')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};

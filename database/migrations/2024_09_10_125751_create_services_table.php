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
        Schema::create('services', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->unique();
            $table->integer('min_price');
            $table->integer('min_hours');
            $table->decimal('percentage');
            $table->enum('icon', ['twf-cleaning-1', 'twf-cleaning-2', 'twf-cleaning-3']);
            $table->integer('prosition');

            $table->integer('price_room');
            $table->integer('hour_room');

            $table->integer('price_living_room');
            $table->integer('hour_living_room');

            $table->integer('price_bathroom');
            $table->integer('hour_bathroom');

            $table->integer('price_kitchen');
            $table->integer('hour_kitchen');

            $table->integer('price_yard');
            $table->integer('hour_yard');

            $table->integer('price_other');
            $table->integer('hour_other');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

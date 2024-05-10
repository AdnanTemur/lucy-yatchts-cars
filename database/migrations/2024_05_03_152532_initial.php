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

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('brand');
            $table->string('model');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->enum('type', ['car', 'yacht']);
            $table->integer('year');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
        });

        Schema::create('car_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicles_id');
            $table->string('body');
            $table->string('condition');
            $table->decimal('mileage', 8, 3);
            $table->decimal('engine_size', 4, 2);
            $table->string('fuel_type');
            $table->string('doors');
            $table->string('cylinders');
            $table->string('transmission');
            $table->string('color');
            $table->string('drive_type');
            $table->string('vin');
            $table->timestamps();
            $table->foreign('vehicles_id')->references('id')->on('vehicles');
        });

        Schema::create('yacht_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicles_id');
            $table->string('manufacturer');
            $table->integer('length');
            $table->string('engine');
            $table->string('fuel_tank');
            $table->string('captain_crew');
            $table->integer('guests_capacity');
            $table->integer('sleeps');
            $table->integer('bathrooms_toilets');
            $table->timestamps();
            $table->foreign('vehicles_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_details');
        Schema::dropIfExists('yacht_details');
        Schema::dropIfExists('vehicles');
        Schema::dropIfExists('categories');
    }
};

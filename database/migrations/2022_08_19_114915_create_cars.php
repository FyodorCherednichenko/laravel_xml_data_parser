<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id('offer_id');
            $table->unsignedBigInteger('mark_id');
            $table->unsignedBigInteger('model_id');
            $table->string('generation', 50);
            $table->year('year');
            $table->integer('run');
            $table->string('color', 25);
            $table->unsignedBigInteger('body_type_id');
            $table->unsignedBigInteger('engine_type_id');
            $table->unsignedBigInteger('transmission_id');
            $table->unsignedBigInteger('gear_type_id');
            $table->integer('generation_id');
            $table->timestamps();

            $table->foreign('mark_id')->references('id')->on('marks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('model_id')->references('id')->on('car_models')->cascadeOnDelete()->cascadeOnUpdate();  ;
            $table->foreign('body_type_id')->references('id')->on('body_types')->cascadeOnDelete()->cascadeOnUpdate();  ;
            $table->foreign('engine_type_id')->references('id')->on('engine_types')->cascadeOnDelete()->cascadeOnUpdate();  ;
            $table->foreign('transmission_id')->references('id')->on('transmissions')->cascadeOnDelete()->cascadeOnUpdate();  ;
            $table->foreign('gear_type_id')->references('id')->on('gear_types')->cascadeOnDelete()->cascadeOnUpdate();  ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};

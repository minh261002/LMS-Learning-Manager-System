<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('id_card');
            $table->tinyInteger('id_card_type')->default(1);
            $table->string('id_card_date');
            $table->string('id_card_place');
            $table->text('front_id_card')->nullable();
            $table->text('back_id_card')->nullable();
            $table->tinyInteger('edu_level')->default(1);
            $table->string('university')->nullable();
            $table->string('major')->nullable();
            $table->tinyInteger('degree')->nullable();
            $table->string('certificate')->nullable();
            $table->string('experience')->nullable();
            $table->string('skill')->nullable();
            $table->string('language')->nullable();
            $table->tinyInteger('is_identity')->default(1);
            $table->tinyInteger('is_verify')->default(2);
            $table->tinyInteger('status')->default(1);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
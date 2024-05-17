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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->longText('long_description');
            $table->float('edu_one_year');
            $table->string('edu_one_name');
            $table->string('edu_one_mark');
            $table->float('edu_two_year');
            $table->string('edu_two_name');
            $table->string('edu_two_mark');
            $table->float('edu_three_year');
            $table->string('edu_three_name');
            $table->string('edu_three_mark');
            $table->float('edu_four_year');
            $table->string('edu_four_name');
            $table->string('edu_four_mark');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};

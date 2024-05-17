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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('banner')->nullable();
            $table->string('icon_one');
            $table->string('link_one');
            $table->string('icon_two');
            $table->string('link_two');
            $table->string('icon_three');
            $table->string('link_three');
            $table->string('icon_four');
            $table->string('link_four');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};

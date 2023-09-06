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
        Schema::create('device_short_url', function (Blueprint $table) {
                $table->id();

                $table->unsignedBigInteger('device_id');
                $table->foreign('device_id')->references('id')->on('devices');

                $table->unsignedBigInteger('short_url_id');
                $table->foreign('short_url_id')->references('id')->on('short_urls');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_short_url');
    }
};

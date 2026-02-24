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
       
        Schema::create('creator_pricing', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('creator_id');
            $table->unsignedBigInteger('platform_id');
            $table->unsignedBigInteger('content_format_id');

            $table->decimal('price', 10, 2);
            $table->string('currency', 10)->default('INR');

            $table->timestamps();

            // Foreign Keys
            $table->foreign('creator_id')
                  ->references('id')
                  ->on('creators')
                  ->onDelete('cascade');

            $table->foreign('platform_id')
                  ->references('id')
                  ->on('social_platforms');

            $table->foreign('content_format_id')
                  ->references('id')
                  ->on('content_formats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creator_pricing');
    }
};

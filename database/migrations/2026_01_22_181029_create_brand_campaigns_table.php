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
        Schema::create('brand_campaigns', function (Blueprint $table) {
            $table->id();

            $table->string('brand_name', 150)->nullable();
            $table->string('campaign_name', 150)->nullable();

            $table->decimal('budget', 12, 2)->nullable();

            $table->unsignedBigInteger('platform_id')->nullable();

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->timestamps();

            // Foreign Key (optional but recommended)
            $table->foreign('platform_id')
                  ->references('id')
                  ->on('social_platforms');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_campaigns');
    }
};

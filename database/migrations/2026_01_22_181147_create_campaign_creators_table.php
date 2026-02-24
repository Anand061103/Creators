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
        Schema::create('campaign_creators', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('campaign_id');
            $table->unsignedBigInteger('creator_id');

            $table->decimal('agreed_price', 10, 2)->nullable();

            $table->enum('status', [
                'invited',
                'accepted',
                'rejected',
                'completed'
            ])->default('invited');

            $table->timestamps();

            // Foreign Keys
            $table->foreign('campaign_id')
                  ->references('id')
                  ->on('brand_campaigns');

            $table->foreign('creator_id')
                  ->references('id')
                  ->on('creators');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_creators');
    }
};

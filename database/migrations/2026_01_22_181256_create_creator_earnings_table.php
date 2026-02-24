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
        Schema::create('creator_earnings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('creator_id');
            $table->unsignedBigInteger('campaign_id')->nullable();

            $table->decimal('amount', 10, 2);

            $table->enum('source', [
                'brand_deal',
                'affiliate',
                'bonus'
            ]);

            $table->enum('payout_status', [
                'pending',
                'paid'
            ])->default('pending');

            $table->date('payout_date')->nullable();

            $table->timestamps();

            // Foreign Keys
            $table->foreign('creator_id')
                  ->references('id')
                  ->on('creators');

            $table->foreign('campaign_id')
                  ->references('id')
                  ->on('brand_campaigns')
                  ->nullOnDelete();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creator_earnings');
    }
};

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
        Schema::create('creator_audience_stats', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('creator_social_account_id');

            $table->string('country', 100)->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('age_group', 50)->nullable();

            $table->decimal('percentage', 5, 2)->nullable();

            $table->timestamps();

            // Foreign Key
            $table->foreign('creator_social_account_id')
                  ->references('id')
                  ->on('creator_social_accounts')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creator_audience_stats');
    }
};

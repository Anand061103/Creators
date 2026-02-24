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
        Schema::create('creator_social_accounts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('creator_id');
            $table->unsignedBigInteger('platform_id');

            $table->string('username', 100)->nullable();
            $table->string('profile_url', 255)->nullable();

            $table->bigInteger('followers')->default(0);
            $table->bigInteger('following')->default(0);
            $table->bigInteger('total_posts')->default(0);
            $table->bigInteger('avg_views')->default(0);

            $table->decimal('engagement_rate', 5, 2)->nullable();

            $table->boolean('is_primary')->default(false);
            $table->boolean('account_verified')->default(false);

            $table->timestamps();

            // Foreign Keys
            $table->foreign('creator_id')
                  ->references('id')
                  ->on('creators')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('creator_social_accounts');
    }
};

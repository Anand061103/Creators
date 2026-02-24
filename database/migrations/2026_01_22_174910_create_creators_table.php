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
        Schema::create('creators', function (Blueprint $table) {
            $table->id();
            $table->string('creator_code', 50)->unique();
            $table->string('full_name', 150);
            $table->string('email', 150)->unique();
            $table->string('phone', 20)->unique();
            $table->text('bio');
            $table->string('profile_image', 255);
            $table->string('city', 100);
            $table->string('country', 100)->default('India');
            $table->enum('creator_type', ['individual', 'agency']);
            $table->enum('verification_status', ['unverified', 'pending', 'verified']);
            $table->enum('status', ['active', 'inactive', 'blocked']);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creators');
    }
};

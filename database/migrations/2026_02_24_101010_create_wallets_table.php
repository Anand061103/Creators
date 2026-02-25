<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wallets', function (Blueprint $table) {

            $table->id();

            // Relation
            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();

            // Wallet data
            $table->decimal('balance', 12, 2)->default(0);
            $table->enum('status', ['active', 'blocked'])->default('active');

            // Optional (future use)
            $table->string('currency', 10)->default('INR');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
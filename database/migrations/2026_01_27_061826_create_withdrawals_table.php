<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');

            $table->decimal('amount', 10, 2);

            $table->string('method', 50);

            $table->enum('status', ['pending', 'approved', 'rejected'])
                  ->default('pending');

            $table->timestamps(); // created_at + updated_at

        });
    }

    public function down()
    {
        Schema::dropIfExists('withdrawals');
    }
};

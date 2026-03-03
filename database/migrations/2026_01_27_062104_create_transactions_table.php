<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
       Schema::create('transactions', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->string('title');
    $table->text('description')->nullable();

    $table->enum('type', ['credit', 'debit']);
    $table->decimal('amount', 12, 2);

    $table->string('reference')->nullable(); 
    $table->string('status')->default('success'); // success, pending, failed

    $table->timestamps();
});
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kycs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('document_type'); // aadhar, pan, etc.
            $table->string('document_number');
            $table->string('document_front')->nullable();
            $table->string('document_back')->nullable();
            $table->enum('status', ['pending', 'verified', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kycs');
    }
};
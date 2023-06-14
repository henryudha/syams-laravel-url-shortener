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
        Schema::create('shortened_urls', function (Blueprint $table) {
          $table->id();
          $table->string('shortened_url');
          $table->string('destination_url');
          $table->dateTime('expiration_time')->nullable();
          $table->unsignedBigInteger('current_uses')->default(0);
          $table->unsignedBigInteger('max_uses')->default(0);
          $table->enum('is_active', [0, 1])->default(1);
          $table->enum('is_custom', [0, 1])->default(0);
          $table->enum('is_private', [0, 1])->default(0);
          $table->string('password')->nullable();
          $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->noActionOnDelete();
          $table->foreignId('updated_by')->constrained('users')->cascadeOnUpdate()->noActionOnDelete();
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('shortened_urls');
    }
};

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
        Schema::create('click_stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shortened_url_id')->constrained('shortened_urls')->cascadeOnUpdate()->noActionOnDelete();
            $table->timestamp('accessed_at');
            $table->ipAddress();
            $table->text('user_agent');
            $table->text('referrer')->nullable();
            $table->string('country');
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('device_type');
            $table->string('operating_system');
            $table->string('browser')->nullable();
            $table->longText('additional_meta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('click_stats');
    }
};

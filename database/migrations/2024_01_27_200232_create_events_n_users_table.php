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
        Schema::create('events_n_users', function (Blueprint $table) {
            $table->unsignedBigInteger('Event_ID');
            $table->foreign('Event_ID')->references('Event_ID')->on('events')->onDelete('cascade');
            $table->string('user_id')->nullable(); // Change user_id to text type and make it nullable
            $table->primary(['Event_ID', 'user_id']); // Composite primary key
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events_n_users');
    }
};
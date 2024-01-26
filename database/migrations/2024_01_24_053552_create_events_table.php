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
        Schema::create('events', function (Blueprint $table) {
            $table->id('Event_ID');
            $table->string('Event_name');
            $table->string('Event_description');
            $table->string('Type_of_event');
            $table->string('Date_and_time');
            $table->string('Address');
            $table->string('City');
            $table->string('State_Province');
            $table->integer('Zip_Postal_Code');
            $table->string('Country');
            $table->string('Organizer_name');
            $table->string('Contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

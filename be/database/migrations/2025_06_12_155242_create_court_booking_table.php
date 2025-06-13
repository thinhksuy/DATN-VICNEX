<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('court_booking', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('court_id');

            $table->date('booking_date');
            $table->time('start_time');
            $table->time('end_time');

            $table->string('status')->default('pending'); // pending, confirmed, cancelled, etc.

            $table->timestamps();

            // Foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('court_id')->references('court_id')->on('courts')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('court_booking');
    }
};

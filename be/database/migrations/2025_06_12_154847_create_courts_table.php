<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courts', function (Blueprint $table) {
            $table->bigIncrements('court_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price_per_hour', 10, 2)->default(0);
            $table->string('location');
            $table->string('status')->default('available'); // e.g., available, maintenance
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courts');
    }
};

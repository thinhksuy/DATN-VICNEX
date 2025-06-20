<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('category_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps(); // Tạo created_at và updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

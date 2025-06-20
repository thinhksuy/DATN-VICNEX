<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->bigIncrements('product_review_id');

            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_id')->nullable();

            $table->tinyInteger('rating'); // ví dụ: 1–5 sao
            $table->text('comment')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default('pending'); // pending, approved, rejected

            $table->timestamps(); // created_at & updated_at

            // Foreign Keys
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('set null');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_reviews');
    }
};

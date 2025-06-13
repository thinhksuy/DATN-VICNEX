<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Tạo khóa chính là 'id' theo chuẩn Laravel

            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->date('order_date');
            $table->decimal('total_amount', 10, 2);
            $table->string('status')->default('pending'); // pending, paid, shipped, etc.
            $table->string('payment_method');
            $table->string('shipping_address');
            $table->string('order_code')->unique();
            $table->text('note_user')->nullable();
            $table->string('status_method')->nullable();
            $table->decimal('shipping_fee', 8, 2)->default(0);

            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

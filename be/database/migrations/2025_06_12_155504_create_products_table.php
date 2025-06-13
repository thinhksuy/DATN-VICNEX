<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');                         // Tên sản phẩm
            $table->text('description')->nullable();        // Mô tả sản phẩm
            $table->decimal('price', 10, 2);                // Giá sản phẩm
            $table->integer('stock')->default(0);           // Số lượng tồn kho
            $table->string('brand')->nullable();            // Thương hiệu
            $table->string('image')->nullable();            // Ảnh sản phẩm
            $table->unsignedBigInteger('category_id');      // Khóa ngoại đến danh mục

            $table->timestamps();

            // Ràng buộc khóa ngoại (nếu có bảng categories)
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

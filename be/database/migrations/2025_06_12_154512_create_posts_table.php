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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('post_id');
            $table->unsignedBigInteger('admin_id');
            $table->string('title');
            $table->text('content');
            $table->string('status')->default('draft'); // bạn có thể thay đổi enum nếu muốn
            $table->timestamps(); // create_at và update_at

            // Foreign key
            $table->foreign('admin_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

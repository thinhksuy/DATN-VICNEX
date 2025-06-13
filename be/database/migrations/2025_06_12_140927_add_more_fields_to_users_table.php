<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('phone')->nullable()->after('password');
        $table->enum('gender', ['male', 'female'])->nullable()->after('avatar');
        $table->date('date_of_birth')->nullable()->after('gender');
        $table->enum('status', ['active', 'inactive'])->default('active')->after('date_of_birth');
        $table->unsignedBigInteger('role_id')->default(2)->after('status');
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['phone', 'avatar', 'gender', 'date_of_birth', 'status', 'role_id']);
    });
}

};

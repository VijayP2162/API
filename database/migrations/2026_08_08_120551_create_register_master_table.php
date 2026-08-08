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
        Schema::create('register_master', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('password');
            $table->string('mobile');
            $table->integer('role');
            $table->string('otp', 6)->nullable();
            $table->integer('user_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_master');
    }
};
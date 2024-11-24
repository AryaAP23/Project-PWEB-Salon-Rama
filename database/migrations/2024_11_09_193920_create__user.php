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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');//relasi dengan reservation
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('alamat');
            $table->string('password');
            $table->boolean('is_admin');
            $table->boolean('is_staff');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_user');
    }
};

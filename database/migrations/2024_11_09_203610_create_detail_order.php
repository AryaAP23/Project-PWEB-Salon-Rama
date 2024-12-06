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
        Schema::create('detail_order', function (Blueprint $table) {
            $table->id('detail_order_id');
            $table->foreignId('order_id')->constrained('orders', 'order_id')->onDelete('cascade');//relasi dengan order
            $table->foreignId('service_id')->constrained('service', 'service_id')->onDelete('cascade');//relasi dengan service
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_order');
    }
};

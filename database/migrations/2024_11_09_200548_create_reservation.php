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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id('reservation_id');
            $table->string('description')->nullable();
            $table->datetime('booking_date');
            $table->enum('status', [
                'Unpaid',
                'Validation',
                'Accepted',
                'Rejected',
                'Canceled',
                'Process'
            ])->default("Validation");
            $table->double('total_cost');
            $table->string('image_path');

            $table->foreignId('user_id')->constrained('users', 'user_id')->onDelete('cascade');//relasi dengan user
            $table->foreignId('payment_id')->constrained('payments', 'payment_id')->onDelete('cascade');//relasi dengan payment
            $table->foreignId('service_id')->constrained('service', 'service_id')->onDelete('cascade');//relasi dengan payment
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};

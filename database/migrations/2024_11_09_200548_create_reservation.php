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
            $table->string('description');
            $table->datetime('booking_date');
            $table->enum('status', [
                'Unpaid',
                'Validation',
                'Accepted',
                'Rejected',
                'Canceled',
                'Process'
            ]);
            $table->double('total_cost');
            $table->integer('service_id');
            $table->foreignId('user_id')->constrained('users', 'user_id')->onDelete('cascade');//relasi dengan user
            $table->foreignId('payment_id')->constrained('payments', 'payment_id')->onDelete('cascade');//relasi dengan payment
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

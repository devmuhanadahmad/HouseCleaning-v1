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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->date('deadline');
            $table->float('number_of_working_hours')->nullable();
            $table->integer('number_of_workers_working')->nullable();
            $table->text('notes')->nullable();
            $table->datetime('appointment')->nullable();
            // pending غير مؤكد الحجز الطلب
            // confirmed تم تاكيد الطلب من الامن و ارسال موعد
            // completed تم تنفيذ الطلب
            $table->enum('status', ['pending', 'confirmed' , 'completed', 'cancelled'])->default('pending');
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

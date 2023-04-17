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
            $table->integer('order_id',true)->index('order_id');
            $table->string('order_shop',40);
            $table->integer('customer_id');
            $table->integer('total_price');
            $table->mediumInteger('payment_method');
            $table->integer('ship_charge');
            $table->integer('tax');
            $table->dateTime('order_date');
            $table->dateTime('shipment_date');
            $table->dateTime('cancel_date');
            $table->tinyInteger('order_status',false);
            $table->string('note_customer')->nullable();
            $table->string('error_code_api',20)->nullable();
            $table->timestamps();
            $table->foreign('customer_id')->references('customer_id')->on('customers');
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

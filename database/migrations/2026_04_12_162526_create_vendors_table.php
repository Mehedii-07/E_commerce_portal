<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->text('address');
            $table->string('id_number')->nullable();
            $table->string('business_name')->nullable();
            $table->string('business_type')->nullable();
            $table->string('gst_number')->nullable();
            $table->string('business_category')->nullable();
            $table->string('bank_account_no')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default('unverified');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
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
        Schema::create('khachhangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gender',10);
            $table->string('email',50);
            $table->string('address');
            $table->string('phone_number',15);
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khachhangs');
    }
};

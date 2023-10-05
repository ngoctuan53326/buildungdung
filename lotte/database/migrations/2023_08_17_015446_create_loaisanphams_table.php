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
        Schema::create('loaisanphams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('tensp',255);
            $table->String('mota',255);
            $table->String('anh',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loaisanphams');
    }
};

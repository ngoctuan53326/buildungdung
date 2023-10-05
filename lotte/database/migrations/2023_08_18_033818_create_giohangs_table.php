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
        Schema::create('giohangs', function (Blueprint $table) {
            $table->id();
            $table->String('tenkh');
            $table->String('tensanpham');
            $table->String('soluong');
            $table->Float('giatien');
            $table->String('hinhanh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giohangs');
    }
};

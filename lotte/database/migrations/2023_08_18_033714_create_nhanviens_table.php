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
        Schema::create('nhanviens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('tennv');
            $table->Date('ngaysinh');
            $table->String('address');
            $table->String('phai');
            $table->float('luong');
            $table->timestamps();
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhanviens');
    }
};

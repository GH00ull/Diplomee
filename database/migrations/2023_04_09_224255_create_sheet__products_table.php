<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sheet__products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sheetsid');
            $table->foreign('sheetsid')->references('id')->on('sheets');
            $table->unsignedBigInteger('productsid');
            $table->foreign('productsid')->references('id')->on('products');
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')->references('id')->on('users');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheet__products');
    }
};
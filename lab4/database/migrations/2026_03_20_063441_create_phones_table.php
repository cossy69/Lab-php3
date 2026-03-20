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
        Schema::create ('phones',function (Blueprint $table) {
            $table->id();
            $table->string('name',30)->unique();
            $table->string('desc',1000)->nullable();
            $table->double('price', 8, 2)->nullable();
            $table->double('discount', 8, 2)->nullable();
            $table->string('imageUrl', 255)->nullable();
            $table->integer('quantity')->default(0);
            $table->boolean('hot')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
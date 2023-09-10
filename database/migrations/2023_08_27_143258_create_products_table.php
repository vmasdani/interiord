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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->text('name')->nullable();
            $table->text('type')->nullable();
            $table->text('price_per_m2')->nullable();
            
            $table->text('t1')->nullable();
            $table->text('t23')->nullable();
            $table->text('1set')->nullable();
            
            $table->text('top')->nullable();
            $table->text('meja')->nullable();
            $table->text('fin')->nullable();

            $table->text('price')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

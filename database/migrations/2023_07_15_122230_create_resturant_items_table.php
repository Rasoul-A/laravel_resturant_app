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
        Schema::create('resturant_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal("category_id",2,0,true)->nullable();
            $table->string("name",100)->nullable(false)->unique();
            $table->text("ingredients")->nullable(false);
            $table->unsignedDecimal("price",10,2)->nullable(false);
            $table->mediumInteger("count",false,true)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resturant_items');
    }
};

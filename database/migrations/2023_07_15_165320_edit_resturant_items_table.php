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
        Schema::table('resturant_items',function(Blueprint $table)
        {
            $table->foreign("category_id")->references("cat_id")->on('categories')->onDelete('set null')->onUpdate('cascade');
            $table->dropUnique(['category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

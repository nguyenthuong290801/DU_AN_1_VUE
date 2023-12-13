<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Product_Category implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('product_category', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_category_id');
            $table->string('category_name');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('parent_category_id', 'product_category');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('product_category');
    }
}

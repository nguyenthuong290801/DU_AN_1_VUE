<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Agency implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('agency', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('address_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('address_id', 'address');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('agency');
    }
}
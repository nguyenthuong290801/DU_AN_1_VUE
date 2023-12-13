<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Employee implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->integer('site_user_id');
            $table->integer('agency_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('site_user_id', 'site_user');
            $table->foreignId('agency_id', 'agency');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
}

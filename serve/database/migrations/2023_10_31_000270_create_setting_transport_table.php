<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Setting_Transport implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('setting_transport', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status');
            $table->integer('agency_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('agency_id', 'agency');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_transport');
    }
}

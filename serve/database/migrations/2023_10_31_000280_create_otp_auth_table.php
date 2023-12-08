<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Otp_Auth implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('otp_auth', function (Blueprint $table) {
            $table->id();
            $table->string('otp');
            $table->string('secret');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('otp_auth');
    }
}

<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Site_User_Facebook implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('site_user_facebook', function (Blueprint $table) {
            $table->id();
            $table->string('user_facebook_id');
            $table->string('user_facebook_name');
            $table->string('user_facebook_phone');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('site_user_facebook');
    }
}

<?php

namespace App\database\migrations;

use Illuminate\framework\Blueprint;
use Illuminate\framework\factory\Schema;
use Illuminate\framework\interface\Migration;

class Role implements Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('role', function (Blueprint $table) {
            $table->id();
            $table->integer('site_user_id');
            $table->string('name_role');
            $table->text('description');
            $table->json('permission');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('site_user_id', 'site_user');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('role');
    }
}

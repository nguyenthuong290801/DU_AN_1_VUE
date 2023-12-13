<?php

namespace App\models;

use Illuminate\framework\base\Model;

class Agency extends Model
{
    protected $table = 'agency';

    protected $columns = [
        'id',
        'site_user_id',
        'name_shop',
        'address_id',
    ];
}

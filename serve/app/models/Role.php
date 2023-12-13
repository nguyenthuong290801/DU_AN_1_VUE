<?php

namespace App\models;

use Illuminate\framework\base\Model;

class Role extends Model
{
    protected $table = 'role';

    protected $columns = [
        'id',
        'site_user_id',
        'name_role',
        'description',
        'permission'
    ];
}

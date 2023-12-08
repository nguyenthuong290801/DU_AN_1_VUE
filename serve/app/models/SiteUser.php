<?php

namespace App\models;

use Illuminate\framework\base\Model;

class SiteUser extends Model
{
    protected $table = 'site_user';

    protected $columns = [
        'id',
        'email_address',
        'phone_number',
        'password'
    ];
}

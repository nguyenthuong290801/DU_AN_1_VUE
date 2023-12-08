<?php

namespace App\models;

use Illuminate\framework\base\Model;

class SiteUserFacebook extends Model
{
    protected $table = 'site_user_facebook';

    protected $columns = [
        'id',
        'user_facebook_id',
        'user_facebook_name',
    ];
}

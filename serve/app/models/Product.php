<?php

namespace App\models;

use Illuminate\framework\base\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $columns = [
        'id',
        'site_user_id',
        'agency_id',
        'product_category_id',
        'name',
        'slug',
        'description',
    ];
}

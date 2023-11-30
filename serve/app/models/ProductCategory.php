<?php

namespace App\models;

use Illuminate\framework\base\Model;

class ProductCategory extends Model
{
    protected $table = 'product_category';

    protected $columns = [
      'id',
      'parent_category_id',
      'category_name',
    ];
}
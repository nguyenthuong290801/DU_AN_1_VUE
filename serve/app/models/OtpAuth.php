<?php

namespace App\models;

use Illuminate\framework\base\Model;

class OtpAuth extends Model
{
    protected $table = 'otp_auth';

    protected $columns = [
        'id',
        'otp',
        'secret',
        'created_at'
    ];
}

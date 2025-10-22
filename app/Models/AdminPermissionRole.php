<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminPermissionRole extends Model
{
    protected $fillable = [
        'email',
        'user_id'
    ];
}

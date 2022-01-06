<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_admin extends Model
{
    use HasFactory;
    protected $table = 'user_admins';
    protected $fillable = [

        'name',
        'email',
        'password',
        'coupon',
        'status'
        
    ];

}

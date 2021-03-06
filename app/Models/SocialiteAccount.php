<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialiteAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'socialite_id',
        'provider',
        'name',
        'email',
        'token',
    ];

    protected $appends = [
        'avatar',
    ];
}

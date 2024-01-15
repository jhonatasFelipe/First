<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class FirstUser extends Model
{
    use HasUuids;

    protected $fillable = [
        'id',
        'name',
        'email',
        'password'
    ];

    protected $casts = [
        'password' => 'hashed'
    ];

    protected $hidden = [
        'password'
    ];
}

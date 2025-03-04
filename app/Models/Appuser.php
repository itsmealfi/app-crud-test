<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appuser extends Model
{
    protected $fillable = [
        'userid',
        'name',
        'email',
        'age'
    ];
}

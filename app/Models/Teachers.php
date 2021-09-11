<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'confirm_password',
        'phone',
        'gender',
        'dob',
        'address',
    

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;

    protected $fillable = [
        'class',
        'subject',
        
    ];

    // public function class()
    // {
    //     return $this->belongsTo('App\Models\Class');
    // }
}

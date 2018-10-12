<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $fillable = [
        'name',
        'content_length',
        'response_code',
        'body'
    ];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

     // Relationships
}

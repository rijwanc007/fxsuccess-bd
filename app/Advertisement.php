<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = [
        'advertisement', 'position'
    ];
    protected $table = 'advertisements';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecentPressRelease extends Model
{
    protected $fillable = ['source_tag','source_link','detail_tag','detail_link'];
    protected $table = 'press_release';
}

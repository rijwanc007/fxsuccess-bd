<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Analysis;
class Comment extends Model
{
    public function analysis()
    {
        return $this->belongsTo('App\Analysis');
    }
}

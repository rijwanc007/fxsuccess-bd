<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
class Articlecomment extends Model
{
    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}

<?php

namespace App;
use \JordanMiguel\LaravelPopular\Traits\Visitable;

use Illuminate\Database\Eloquent\Model;
use App\Articlecomment;
class Article extends Model
{
    use Visitable;

    public function artcomments()
    {
        return $this->hasMany('App\Articlecomment');
    }
    public static function boot()
    {
        parent::boot();    
    
        static::deleted(function($comments)
        {
            $comments->artcomments()->delete();
            
        });
    }  
}

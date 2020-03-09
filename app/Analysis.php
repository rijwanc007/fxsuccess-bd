<?php

namespace App;
use \JordanMiguel\LaravelPopular\Traits\Visitable;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
class Analysis extends Model
{
    protected $fillable = [
        'title', 'published_by', 'image','description','status','time_zone'
    ];
    protected $table = 'analysis';

    use Visitable;

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public static function boot()
    {
        parent::boot();    
    
        static::deleted(function($comments)
        {
            $comments->comments()->delete();
            
        });
    }
}

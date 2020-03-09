<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fxbrokerreview;
use App\Brokerprocon;
use App\Brokervideo;
use App\Review;
class Brokerreview extends Model
{
    public function fxreview(){
     	
    	return $this->hasOne(Fxbrokerreview::class);
    }
    public function procon(){
     	
    	return $this->hasOne(Brokerprocon::class);
    }
    public function brokervid(){
     	
    	return $this->hasOne(Brokervideo::class);
    }
    public function review(){
     	
    	return $this->hasMany(Review::class);
    }

    public static function boot()
    {
        parent::boot();    
    
        static::deleted(function($tutorial)
        {
            $tutorial->fxreview()->delete();
            $tutorial->procon()->delete();
            $tutorial->brokervid()->delete();
            $tutorial->review()->delete();
        });
    }  
     
}

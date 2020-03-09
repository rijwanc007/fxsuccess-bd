<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brokerreview;

class Brokerprocon extends Model
{
    public function brokerreview(){
     	
    	return $this->belongsTo(Brokerreview::class);
    }
}

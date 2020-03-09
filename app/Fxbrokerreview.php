<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brokerreview;

class Fxbrokerreview extends Model
{
    public function brokerreview(){
     	
    	return $this->belongsTo(Brokerreview::class);
    }
}

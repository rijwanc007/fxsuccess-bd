<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brokerreview;
class Brokervideo extends Model
{
    public function brokerreview(){
     	
    	return $this->belongsTo(Brokerreview::class);
    }
}

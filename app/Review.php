<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brokerreview;
class Review extends Model
{
    public function brokerreview()
    {
        return $this->belongsTo('Brokerreview::class');
    }
    public $timestamps = false;

    protected $guarded = [];

    // public function author()
    // {
    //     return $this->belongsTo(Brokerreview::class, 'user_id', 'id');
    // }
}

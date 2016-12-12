<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = 'buildings';
    protected $fillable = [
        'bu_name' , 'bu_price' ,'bu_rent', 'bu_square', 'bu_type', 'bu_small_desc', 'bu_meta',
        'bu_longitude', 'bu_latitude', 'bu_status', 'user_id', 'bu_room', 'bu_long_desc'
    ];

//    public function user()
//    {
//        return $this->belongsTo('App\User');
//    }
}

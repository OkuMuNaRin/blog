<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'body','user_id'
    ];
function User(){
    return $this->belongsTo('App\User', 'user_id', 'id','user_id');
}
}

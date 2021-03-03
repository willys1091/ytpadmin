<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    public $timestamps = false;

    protected $table = 'admin';

    public function post_hdr(){
        return $this->hasMany('App\post_hdr');
    }
}

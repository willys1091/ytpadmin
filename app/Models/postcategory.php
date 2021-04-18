<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postcategory extends Model{
    use HasFactory;

    protected $table = 'postcategory';

    public function post(){
        return $this->hasOne('App\Models\post');
    }
}

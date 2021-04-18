<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model{
    use HasFactory;

    protected $table = 'post';

    public function postcategory(){
        return $this->belongsTo('App\Models\postcategory','modul');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class court_type extends Model
{
    public function court_type(){
        //return $this->hasMany(Court_type::class);
        // return $this->belongsTo(Court::class, 'court_type_id');
    }
}

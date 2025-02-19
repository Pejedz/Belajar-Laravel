<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class court extends Model
{
    public function type(){
        //return $this->hasMany(Court_type::class);
        return $this->belongsTo(Court_type::class, 'court_type_id');
    }
}

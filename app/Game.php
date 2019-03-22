<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //

    public function players() {
        return $this->hasMany(User::class);
    }


    public function developer(){
        return $this->belongsTo(Developer::class);
    }
}

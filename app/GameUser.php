<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class GameUser extends Model
{
    protected $table = 'game_user';
    public $incrementing = true;

    /**
     * @return mixed
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * @return mixed
     */
    public function game(){
        return $this->belongsTo(Game::class);
    }
}

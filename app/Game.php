<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Game extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot(['user_id', 'game_id', 'score']);
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withPivot(['user_id', 'game_id', 'score']);
    }

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }
}

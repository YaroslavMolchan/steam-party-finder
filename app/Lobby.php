<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lobby extends Model
{
    protected $fillable = [
        'rank_min', 'rank_max', 'type', 'comment', 'user_id', 'is_active'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $fillable = ['user_id', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

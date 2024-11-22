<?php

namespace App\Models;

class Registration extends Model
{
    protected $fillable = ['user_id', 'workshop_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
}

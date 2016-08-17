<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    // protected $hidden = ['title'];
    protected $fillable = ['title', 'body'];

    public function scopeGetBasicField($query) {
        return $query->get([
            'title',
            'body as content',
            'free as is_free'
        ]);
    }
}

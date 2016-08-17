<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    // protected $hidden = ['title'];
    protected $fillable = ['title', 'body'];

    public function getCreatedAtAttribute ($value) {
        // $this->attributes['created_at'] = date(DATE_ISO8601, strtotime($value));
        return date(DATE_ISO8601, strtotime($value));
    }

    public function getUpdatedAtAttribute ($value) {
        return date(DATE_ISO8601, strtotime($value));
    }

    public function scopeGetBasicField($query) {
        return $query->get([
            'title',
            'body as content',
            'free as is_free'
        ]);
    }
}

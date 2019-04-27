<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'title',
        'content',
        'image'
    ];
    
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function tag()
    {
        return $this->belongsToMany('App\Tags');
    }
}

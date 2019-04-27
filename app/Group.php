<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'id',
        'name'
    ];
    
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
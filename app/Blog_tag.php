<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_tag extends Model
{
    protected $fillable = [
        'id',
        'blog_id',
        'tag_id'
    ];
    
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'task', 'is_completed'
    ];

    protected $casts = ['is_completed' => 'boolean'];
}

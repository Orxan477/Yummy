<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;
    protected $table = 'chefs';
    protected $filltable = [
        'fullName',
        'content',
        'image',
        'position_id'
    ];

    public function position()
    {
        return $this->belongsTo(Poisition::class, 'position_id');
    } 
}

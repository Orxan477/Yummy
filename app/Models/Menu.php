<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table= 'menu';
    protected $filltable=[
        'image',
        'name',
        'ingredient',
        'price',
    ];
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}

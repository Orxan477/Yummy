<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $table= 'menus';
    protected $fillable = [
        'title',
        'content',
        'image'
    ];

    
}

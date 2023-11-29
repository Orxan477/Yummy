<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Why_Choose extends Model
{
    use HasFactory;
    protected $table = 'why_choose';
    protected $filltable=[
        'title',
        'content'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    use HasFactory;
    protected $table = 'statistics';
    protected $filltable=[
        'client',
        'project',
        'hours_of_support',
        'worker'
    ];
}

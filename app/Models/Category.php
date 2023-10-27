<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $filltable=['name'];

    public function menu()
    {
        return $this->hasMany(Menu::class);
    }
}

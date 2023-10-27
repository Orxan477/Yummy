<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choose_Option extends Model
{
    use HasFactory;
    protected $table = 'choose_option'; // Veritabanı tablosu adı
    protected $filltbale=[
        'logo',
        'title',
        'content'
    ];
}

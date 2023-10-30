<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $table='name';
    protected $filltabl=[
        'name'
    ];

    public function chef()
    {
        return $this->belongsTo(Chef::class, 'position_id');
    }
}

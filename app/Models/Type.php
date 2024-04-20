<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_car',
        'is_bus',
        'is_moto',
    ];

    public function directions()
    {
        return $this->hasMany(Direction::class);
    }
}

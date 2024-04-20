<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;

    protected $fillable = [
        'time',
        'date',
        'quantity',
        'type_id',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    
}

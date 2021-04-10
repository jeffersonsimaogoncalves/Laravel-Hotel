<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_id',
        'number',
        'capacity',
        'price',
        'view',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
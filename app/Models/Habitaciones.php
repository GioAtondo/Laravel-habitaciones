<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitaciones extends Model
{
    use HasFactory;

    protected $fillable = [
        'hoteles_id',
        'tipo_id',
        'precio',
        'vida'
    ];
}

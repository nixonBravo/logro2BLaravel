<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $fillable = [
        'marca',
        'modelo',
        'color',
        'categoria_id',
        'user_id',
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

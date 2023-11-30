<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    use HasFactory;
    protected $table = 'reservacion';
    protected $fillable = [
        'id_cliente',
        'id_restaurante',
        'fecha',
        'hora',
        'cantidad',
        'comentario',
        'estado',
    ];
    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'id_restaurante', 'id');
    }
}

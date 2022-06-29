<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = ['contenido'];

    public function nota() {
        return $this->belongsTo(Nota::class, 'idnota');
    }

    public function usuario() {
        return $this->belongsTo(User::class, 'idusuario');
    }
}

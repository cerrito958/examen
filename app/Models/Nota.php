<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'contenido'];

    public function usuario() {
        return $this->belongsTo(User::class, 'idusuario');
    }

    public function comentarios() {
        return $this->hasMany(Comentario::class, 'idnota');
    }

}

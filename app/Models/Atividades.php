<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividades extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'endereco', 'distancia', 'tempo', 'data', 'descricao'];

    // Relacionamento com User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacionamento com Bicicleta (uma bicicleta por atividade)
    public function bicicleta()
    {
        return $this->belongsTo(Bicicleta::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bicicleta extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca',
        'modelo',
        'aro',
        'cor',
        'user_id', // Certifique-se de que o campo user_id é preenchível
    ];

    // Definir o relacionamento com o User (se necessário)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

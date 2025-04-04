<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividades extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'endereco', 'distancia', 'tempo', 'data', 'descricao'];
}

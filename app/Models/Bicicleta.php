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
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

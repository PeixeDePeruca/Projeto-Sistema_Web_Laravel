<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospede extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'tipo_transformacao',
    ];
    
}

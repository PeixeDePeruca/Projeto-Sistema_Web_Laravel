<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['quarto_id', 'hospede_id', 'data_entrada', 'data_saida', 'valor_total'];

    public function quarto()
    {
        return $this->belongsTo(Quarto::class);
    }

    public function hospede()
    {
        return $this->belongsTo(Hospede::class);
    }
}
<?php

namespace SistemaControleBar;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='clientes';
    protected $primaryKey='id_clientes';
    public $timestamps=false;





    protected $fillable=[
        'nome',
        'sobrenome',
        'telefone',
        'logradouro',
        'bairro',
        'numero',
        'complemento'

    ];

    protected $guarded=[

    ];
}

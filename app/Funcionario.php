<?php

namespace SistemaControleBar;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table='funcionario';
    protected $primaryKey='id_funcionario';
    public $timestamps=false;





    protected $fillable=[
        'nome',
        'sobrenome',
        'cargo',
        'endereco',
        'telefone'

    ];

    protected $guarded=[

    ];
}

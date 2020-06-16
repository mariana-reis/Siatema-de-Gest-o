<?php

namespace SistemaControleBar;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table='fornecedores';
    protected $primaryKey='id_fornecedor';
    public $timestamps=false;





    protected $fillable=[
        'nome',
        'sobrenome',
        'endereco',
        'bairro',
        'cidade',
        'telefone',
        'celular'
    ];

    protected $guarded=[

    ];




}

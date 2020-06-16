<?php

namespace SistemaControleBar;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table='produtos';
    protected $primaryKey='id_produtos';
    public $timestamps=false;





    protected $fillable=[
        'tipo_produto',
        'nome',
        'preco',
        'quantidade_estoque'

    ];

    protected $guarded=[

    ];




}

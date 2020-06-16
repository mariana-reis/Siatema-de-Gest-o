<?php

namespace SistemaControleBar;

use Illuminate\Database\Eloquent\Model;

class Caixa extends Model
{

    protected $fillable = [
        'id', 'tipo', 'descricao', 'preco', 'data'
    ];
}

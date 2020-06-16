<?php

namespace SistemaControleBar;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuarios';
    protected $primaryKey='id_usuarios';
    public $timestamps=false;





    protected $fillable=[
        'nome',
        'email',
        'senha',
        'status',
        'cargo',
        'tipo_usuario'

    ];

    protected $guarded=[

    ];


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table = 'usuarios';
    protected $primaryKey = 'idUsuarios';
    public $timestamps = true;
    protected $fillable = [
        'nome',
        'email',
        'senha',
        'placaDoCarro',
        'telefone'
    ];
    protected $guarded = [];
    
}

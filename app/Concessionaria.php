<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concessionaria extends Model
{
    //
    protected $table = 'concessionarias';
    protected $primaryKey = 'idConcessionarias';
    public $timestamps = true;
    protected $fillable = [
        'nome',
        'endereco',
        'bairro',
        'cidade',
        'uf',
        'complemento',
        'cep',
        'telefone'
    ];
    protected $guarded = [];
}

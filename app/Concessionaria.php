<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; 

use App\TestDrive; 

class Concessionaria extends Model
{
    //
    protected $table = 'concessionarias';
    protected $primaryKey = 'idConcessionaria';
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

    public function testDrive():HasMany {
        return $this->hasMany(TestDrive::class);
    }

    protected $guarded = [];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestDrive extends Model
{
    //
    protected $table = 'testdrives';
    protected $primaryKey = 'idTestDrives';
    public $timestamps = true;
    protected $fillable = [
        'data',
        'concessionaria_id',
    ];
    protected $guarded = [];

    public function concessionaria(): hasOne{
        
    }
}

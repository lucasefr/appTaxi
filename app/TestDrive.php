<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Concessionaria; 
use App\User; 

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

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function concessionaria(): BelongsTo{
        return $this->belongsTo(Concessionaria::class);
    }
}

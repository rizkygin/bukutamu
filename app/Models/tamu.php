<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tamu extends Model
{
    use HasFactory;
    protected $table = 'tamu';

    // public function instansi(){
    //     return $this->belongsTo(App\Models\instansi::class,'instansi_id');
    // }
    public function instansi(){
        return $this->hasOne(instansi::class,'instansi_id');
    }
}
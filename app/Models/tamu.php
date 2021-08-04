<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tamu extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tamu';

    protected $softDelete = true;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nama',
        'instansi_id'
    ];
    public function instansi(){
        return $this->belongsTo(instansi::class,'instansi_id');
    }
    // public function instansi(){
    //     return $this->hasOne(instansi::class,'instansi_id');
    // }
}

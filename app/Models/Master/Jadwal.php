<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table='jadwal';
    protected $guarded=['id'];
    
    public function mapel(){
        return $this->belongsTo('App\Models\Master\Matapelajaran');
    }
}
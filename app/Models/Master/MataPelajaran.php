<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $table = "mata_pelajaran";
    protected $guarded=['id'];
    public function jadwal(){
        return $this->hasOne('App\Models\Master\Jadwal','mapel_id');
    }
    public function kelompokmapel(){
        return $this->belongsTo('App\Models\Master\KelompokMapel');
    }    
}
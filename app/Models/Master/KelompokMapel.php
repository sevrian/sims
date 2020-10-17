<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class KelompokMapel extends Model
{
    protected $table="kelompokmapel";
    protected $guarded=['id'];
    
    public function mapel(){
        return $this->hasOne('App\Models\Master\MataPelajaran','kelompokmapel_id');
    }    
}
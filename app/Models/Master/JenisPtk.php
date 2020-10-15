<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class JenisPtk extends Model
{
    protected $table = 'jenis_ptk';
    protected $fillable = ['jenis_ptk', 'keterangan'];
}

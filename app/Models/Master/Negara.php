<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    protected $table = 'negara';
    protected $fillable = ['nama_negara', 'keterangan'];
}

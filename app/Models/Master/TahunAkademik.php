<?php

namespace App\Models\Master;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;

class TahunAkademik extends Model
{
    protected $table = 'tahun_akademik';
    protected $guarded = ['id'];
}

<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kelas extends Model
{
    protected  $table  = 'kelas';
    protected $guarded = [];

    public function guru()
    {
        return $this->belongsTo('App\Models\Guru');
    }
}

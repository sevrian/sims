<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guru extends Model
{
    protected $table = 'guru';

    protected $guarded = [];
    public function agama()
    {
        return $this->BelongsTo('App\Models\Master\Agama');
    }
    public function negara()
    {
        return $this->BelongsTo('App\Models\Master\Negara');
    }
}

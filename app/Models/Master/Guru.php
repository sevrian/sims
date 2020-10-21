<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guru extends Model
{
    protected $table = 'guru';
    
    public function getAgama(){
        return $this->BelongsTo('App\Model\Master\Agama');
    }

}

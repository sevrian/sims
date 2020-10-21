<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = [
        'nama_guru',
        'nip',
        'jenisptk_id',
        'negara_id',
        'agama_id',
        'password',
        'tanggal_lahir',
        'temapat_lahir',
        'jenis_kelamin',
        'nik',
        'telepon',
        'nuptk',
        'alamat',
        'email',
        'status_aktif',
        'foto'
    ];
    public function getAgama()
    {
        return $this->BelongsTo('App\Model\Master\Agama');
    }
}

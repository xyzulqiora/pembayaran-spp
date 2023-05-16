<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusSiswa extends Model
{
    use HasFactory;
    protected $table = 'status_siswa';
    protected $guarded = ['id'];

    public function siswae()
    {
        return $this->belongsTo(Siswa::class);
    }
}

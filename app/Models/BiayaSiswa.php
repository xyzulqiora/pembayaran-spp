<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaSiswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'biaya_siswa';

    public function penerimaan(){return $this->belongsTo(Penerimaan::class);}
    public function pembayaran(){return $this->hasMany(Pembayaran::class);}
}

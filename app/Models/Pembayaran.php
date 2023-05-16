<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    public function users(){return $this->belongsTo(User::class);}
    public function siswa(){return $this->belongsTo(Siswa::class);}
    public function petugas(){return $this->belongsTo(Petugas::class);}
    public function MetodePembayaran(){return $this->belongsTo(MetodePembayaran::class, 'metode_pembayaran_id');}
    public function biayaSiswa(){return $this->belongsTo(BiayaSiswa::class);}

}

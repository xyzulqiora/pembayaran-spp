<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $guarded = ['id'];
    protected $fillable = ['users_id', 'nisn', 'nis', 'kelas_id', 'jurusan_Id', 'spp_id', 'alamat', 'status_id'];

    public function users(){return $this->belongsTo(User::class);}
    public function kelas(){return $this->belongsTo(Kelas::class);}
    public function jurusan(){return $this->belongsTo(Jurusan::class);}
    public function spp(){return $this->belongsTo(Spp::class);}
    public function angkatan(){return $this->belongsTo(TahunAjaran::class, 'angkatan_id');}
    public function pembayaran(){return $this->hasMany(Pembayaran::class);}
    public function statuse(){return $this->belongsTo(StatusSiswa::class, 'status_id');}
}

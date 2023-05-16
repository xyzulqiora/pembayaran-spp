<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    protected $table = 'petugas';
    protected $fillable = ['users_id', 'nip'];
    public function users(){return $this->belongsTo(User::class);}
    public function pembayaran(){return $this->hasMany(Pembayaran::class);}
}

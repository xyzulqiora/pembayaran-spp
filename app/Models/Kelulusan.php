<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelulusan extends Model
{
    use HasFactory;
    protected $table = 'kelulusan';
    protected $guarded = ['id'];
    public function siswas(){return $this->belongsTo(Siswa::class);}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    use HasFactory;
    protected $table = 'penerimaan';

    public function biayaSiswa()
    {
        return $this->hasMany(BiayaSiswa::class);
    }
}

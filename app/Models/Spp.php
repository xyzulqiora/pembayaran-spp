<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'spp';
    protected $primaryKey = 'id';

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
